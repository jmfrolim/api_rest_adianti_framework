<?php
require_once 'post.php';
require_once 'request.php';
class ContactAPI extends TPage
{
    public function __construct()
    {
        parent::__construct();
        $body = [];
        $body['id'] = 1;
        
        
        try
        {
            $location = 'http://localhost:8080/contacts/rest.php';
        
            $parameters = [];
            $parameters['class']  = 'ContactRestService';
            $parameters['method'] = 'load';
            $parameters['id']     = '1';
            var_dump(post($location, $parameters));
        }
        catch (Exception $e)
        {
                echo 'Error: '. $e->getMessage();
        }
        /*
        try
        {
                $location = 'http://localhost:8080/contacts/1';
                print_r( request($location, 'GET',$body) );
        }
        catch (Exception $e)
        {
            echo 'Error: ' . $e->getMessage();
        }*/
    }
}
