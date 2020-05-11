<?php

namespace Pab;

use Pop\Application;
use Pop\Http\Request;
use Pop\Http\Response;

class Module extends \Pop\Module\Module
{

    /**
     * Module name
     * @var string
     */
    protected $name = 'pab';

    /**
     * Register module
     *
     * @param Application $application
     * @return Module
     */
    public function register(Application $application)
    {
        parent::register($application);

        if (null !== $this->application->router()) {
            $this->application->router()->addControllerParams(
                '*', [
                    'request'     => new Request(),
                    'response'    => new Response()
                ]
            );
        }

        return $this;
    }
}