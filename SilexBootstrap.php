<?php

use PHPPM\Symfony\StrongerNativeSessionStorage;
use PHPPM\Utils;
use Symfony\Component\HttpFoundation\Request;
use PHPPM\Bootstraps\BootstrapInterface;
use PHPPM\Bootstraps\HooksInterface;
use PHPPM\Bootstraps\ApplicationEnvironmentAwareInterface;

/**
 * A default bootstrap for the Symfony framework
 */
class SilexBootstrap implements BootstrapInterface, HooksInterface, ApplicationEnvironmentAwareInterface
{
    /**
     * @var string|null The application environment
     */
    protected $appenv;

    /**
     * @var boolean
     */
    protected $debug;

    /**
     * Instantiate the bootstrap, storing the $appenv
     *
     * @param $appenv
     * @param $debug
     */
    public function initialize($appenv, $debug)
    {
        $this->appenv = $appenv;
        $this->debug = $debug;
    }

    /**
     * @return string
     */
    public function getStaticDirectory()
    {
        return 'web/';
    }

    /**
     * Create a Symfony application
     *
     * @return \AppKernel
     */
    public function getApplication()
    {
        $app = require './web/app.php';
        return $app;
    }

    /**
     * Does some necessary preparation before each request.
     *
     * @param \AppKernel $app
     */
    public function preHandle($app)
    {
    }

    /**
     * Does some necessary clean up after each request.
     *
     * @param \AppKernel $app
     */
    public function postHandle($app)
    {
    }
}
