<?php

/*
 * This file is part of the CategoryContent
 *
 * Copyright (C) 2018 Yen Truong
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\CategoryContent;

use Eccube\Application;
use Eccube\Event\EventArgs;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\Event\PostResponseEvent;

class CategoryContentEvent
{

    /** @var  \Eccube\Application $app */
    private $app;

    /**
     * CategoryContentEvent constructor.
     *
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * @param FilterResponseEvent $event
     */
    public function onRenderProductListBefore(FilterResponseEvent $event)
    {
    }

    /**
     * @param FilterResponseEvent $event
     */
    public function onRenderAdminProductCategoryBefore(FilterResponseEvent $event)
    {
    }

    /**
     *
     */
    public function onControllerAdminProductCategoryBefore()
    {
    }

    /**
     *
     */
    public function onControllerAdminProductCategoryFinish()
    {
    }

    /**
     * @param EventArgs $event
     */
    public function onAdminProductCategoryIndexInitialize(EventArgs $event)
    {
    }

    /**
     * @param EventArgs $event
     */
    public function onAdminProductCategoryIndexComplete(EventArgs $event)
    {
    }

    /**
     * @param EventArgs $event
     */
    public function onFrontProductIndexInitialize(EventArgs $event)
    {
    }

}
