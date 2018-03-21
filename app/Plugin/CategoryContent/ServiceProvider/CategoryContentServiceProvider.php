<?php

/*
 * This file is part of the CategoryContent
 *
 * Copyright (C) 2018 Yen Truong
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\CategoryContent\ServiceProvider;

use Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy;
use Monolog\Handler\FingersCrossedHandler;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Logger;
use Plugin\CategoryContent\Form\Type\CategoryContentConfigType;
use Silex\Application as BaseApplication;
use Silex\ServiceProviderInterface;

class CategoryContentServiceProvider implements ServiceProviderInterface
{

    public function register(BaseApplication $app)
    {
        // プラグイン用設定画面
        $app->match('/'.$app['config']['admin_route'].'/plugin/CategoryContent/config', 'Plugin\CategoryContent\Controller\ConfigController::index')->bind('plugin_CategoryContent_config');

        // 独自コントローラ
        $app->match('/plugin/categorycontent/hello', 'Plugin\CategoryContent\Controller\CategoryContentController::index')->bind('plugin_CategoryContent_hello');

        // Form
        $app['form.types'] = $app->share($app->extend('form.types', function ($types) use ($app) {
            $types[] = new CategoryContentConfigType();

            return $types;
        }));

        // Repository

        // Service

        // メッセージ登録
        // $file = __DIR__ . '/../Resource/locale/message.' . $app['locale'] . '.yml';
        // $app['translator']->addResource('yaml', $file, $app['locale']);

        // load config
        // プラグイン独自の定数はconfig.ymlの「const」パラメータに対して定義し、$app['categorycontentconfig']['定数名']で利用可能
        // if (isset($app['config']['CategoryContent']['const'])) {
        //     $config = $app['config'];
        //     $app['categorycontentconfig'] = $app->share(function () use ($config) {
        //         return $config['CategoryContent']['const'];
        //     });
        // }

        // ログファイル設定
        $app['monolog.logger.categorycontent'] = $app->share(function ($app) {

            $logger = new $app['monolog.logger.class']('categorycontent');

            $filename = $app['config']['root_dir'].'/app/log/categorycontent.log';
            $RotateHandler = new RotatingFileHandler($filename, $app['config']['log']['max_files'], Logger::INFO);
            $RotateHandler->setFilenameFormat(
                'categorycontent_{date}',
                'Y-m-d'
            );

            $logger->pushHandler(
                new FingersCrossedHandler(
                    $RotateHandler,
                    new ErrorLevelActivationStrategy(Logger::ERROR),
                    0,
                    true,
                    true,
                    Logger::INFO
                )
            );

            return $logger;
        });

    }

    public function boot(BaseApplication $app)
    {
    }

}
