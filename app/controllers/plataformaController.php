<?php

/*
 * This file is part of the Ocrend Framewok 2 package.
 *
 * (c) Ocrend Software <info@ocrend.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

namespace app\controllers;

use app\models as Model;
use Ocrend\Kernel\Router\IRouter;
use Ocrend\Kernel\Controllers\Controllers;
use Ocrend\Kernel\Controllers\IControllers;

/**
 * Controlador plataforma/
 *
 * @author Jorge Jara H. <jjara@wys.cl>
*/

class plataformaController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        parent::__construct($router,array(
            'users_logged' => true,
            'access_menu' => ['id_menu' => 1, 'access' => true]
        ));

        $op = '1';
		    echo $this->template->render('plataforma/plataforma', array('menu_op' => $op ));

    }

}
