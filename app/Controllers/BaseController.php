<?php

namespace App\Controllers;

use App\Services\View;
use App\Services\Auth;

/**
 * BaseController
 */
class BaseController
{
    /**
     * @var \Smarty
     */
    protected $view;

    /**
     * @var \App\Models\User
     */
    protected $user;

    /**
     * Construct page renderer
     */
    public function __construct()
    {
        $this->view = View::getSmarty();
        $this->user = Auth::getUser();
    }

    /**
     * Get smarty
     *
     * @return \Smarty
     */
    public function view()
    {
        return $this->view;
    }
    /**
     * @param $response
     * @param $res
     * @return mixed
     */
    public function echoJson($response, $res)
    {
        return $response->getBody()->write(json_encode($res));
    }
}
