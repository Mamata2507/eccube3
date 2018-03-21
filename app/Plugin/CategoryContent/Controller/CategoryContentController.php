<?php

/*
 * This file is part of the CategoryContent
 *
 * Copyright (C) 2018 Yen Truong
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\CategoryContent\Controller;

use Eccube\Application;
use Symfony\Component\HttpFoundation\Request;

class CategoryContentController
{

    /**
     * CategoryContent画面
     *
     * @param Application $app
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Application $app, Request $request)
    {

        // add code...

        return $app->render('CategoryContent/Resource/template/index.twig', array(
            // add parameter...
        ));
    }

}
