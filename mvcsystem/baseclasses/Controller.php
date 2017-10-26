<?php

namespace mvcsystem\baseclasses;


use Exception;
use mvcsystem\MvcHelper;
use mvcsystem\RequestDirector;

class Controller implements ControllerInterface
{

    private $callingController;
    private $requestDirector;

    public function __construct(RequestDirector $requestDirector)
    {
        $this->callingController = get_class($this);
        $this->requestDirector = $requestDirector;
    }

    public function index()
    {
        //stub, extended in concrete controller
    }

    public function returnRedirect($url)
    {
        header('location: ' . $url);
        die();
    }

    public function returnErrorPage(int $statusCode = 500, $message = '')
    {
        $this->requestDirector->handleError($statusCode, $message);
    }

    public function returnString($returnString = '')
    {
        die($returnString);
    }

    public function returnView(array $vars = [])
    {
        $viewname = debug_backtrace()[1]['function'];
        $dir = MvcHelper::rootDir('view') . str_ireplace(['controller\\', 'controller'], '', $this->callingController) . '/';
        $file = $viewname . '.php';
        $path = $dir . $file;
        if (!is_dir($dir)) throw new Exception('View directory or view not existing');
        if (!file_exists($path)) {
            if (file_exists($dir . $viewname . '.subview.php')) {
                //Load LAYOUT + SUBVIEW
                extract($vars);
                ob_start();
                include($dir . $viewname . '.subview.php');
                $renderSubview = ob_get_contents();
                ob_end_clean();
                ob_start();
                include($dir . '_layout.php');
                $output = ob_get_contents();
                ob_end_clean();
                die($output);
            } else {
                throw new Exception('View directory or view not existing');
            }
        } else {
            //LOAD VIEW
            extract($vars);
            ob_start();
            include($path);
            $output = ob_get_contents();
            ob_end_clean();
            die($output);
        }
    }
}