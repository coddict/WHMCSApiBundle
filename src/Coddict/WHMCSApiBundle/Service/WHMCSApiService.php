<?php

namespace Coddict\WHMCSApiBundle\Service;

class WHMCSApiService
{
    /**
     * The Symfony2 Service Container
     */
    protected $container;
    
    /**
     * The WHMCS Api Key
     */
    protected $apiKey;
    
    /**
     * The WHMCS Hostname (ex: whmcs.myhostingcompany.com
     */
    protected $host;
    
    /**
     * The path or route to call the Api front controller on the host
     */
    protected $path;
    
    public function __construct($container, $apiKey, $host, $path)
    {
        $this->container = $container;
        $this->apiKey = $apiKey;
        $this->host = $host;
        $this->path = $path;
    }
}

?>