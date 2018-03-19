<?php return array (
  'CategoryContent' => 
  array (
    'config' => 
    array (
      'name' => 'Category Content',
      'code' => 'CategoryContent',
      'version' => '1.0.0',
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
      'service' => 
      array (
        0 => 'CategoryContentServiceProvider',
      ),
    ),
    'event' => 
    array (
      'eccube.event.render.admin_product_category_edit.before' => 
      array (
        0 => 
        array (
          0 => 'onRenderAdminProductCategoryEditBefore',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
  'PromotionCode' => 
  array (
    'config' => 
    array (
      'name' => 'Promotion Code',
      'code' => 'PromotionCode',
      'version' => '1.0.1',
      'event' => 'PromotionCodeEvent',
      'service' => 
      array (
        0 => 'PromotionCodeServiceProvider',
      ),
      'orm.path' => 
      array (
        0 => '/Resource/doctrine',
      ),
    ),
    'event' => 
    array (
      'eccube.event.app.before' => 
      array (
        0 => 
        array (
          0 => 'onAppBefore',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.app.after' => 
      array (
        0 => 
        array (
          0 => 'onAppAfter',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.app.request' => 
      array (
        0 => 
        array (
          0 => 'onAppRequest',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.app.controller' => 
      array (
        0 => 
        array (
          0 => 'onAppController',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.app.response' => 
      array (
        0 => 
        array (
          0 => 'onAppResponse',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.front.request' => 
      array (
        0 => 
        array (
          0 => 'onFrontRequest',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.front.controller' => 
      array (
        0 => 
        array (
          0 => 'onFrontController',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.front.response' => 
      array (
        0 => 
        array (
          0 => 'onFrontResponse',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.admin.request' => 
      array (
        0 => 
        array (
          0 => 'onAdminRequest',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.front.exception' => 
      array (
        0 => 
        array (
          0 => 'onFrontException',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.admin.controller' => 
      array (
        0 => 
        array (
          0 => 'onAdminController',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.admin.response' => 
      array (
        0 => 
        array (
          0 => 'onAdminResponse',
          1 => 'NORMAL',
        ),
      ),
      'eccube.event.admin.exception' => 
      array (
        0 => 
        array (
          0 => 'onAdminException',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.payment.initialize' => 
      array (
        0 => 
        array (
          0 => 'onFrontShoppingPaymentInitialize',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.confirm.initialize' => 
      array (
        0 => 
        array (
          0 => 'onFrontShoppingConfirmInitialize',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.payment.complete' => 
      array (
        0 => 
        array (
          0 => 'onFrontShoppingPaymentComplete',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.confirm.complete' => 
      array (
        0 => 
        array (
          0 => 'onFrontShoppingConfirmComplete',
          1 => 'NORMAL',
        ),
      ),
      'front.shopping.confirm.processing' => 
      array (
        0 => 
        array (
          0 => 'onFrontShoppingConfirmProcessing',
          1 => 'NORMAL',
        ),
      ),
      'service.shopping.notify.complete' => 
      array (
        0 => 
        array (
          0 => 'onServiceShoppingNotifyComplete',
          1 => 'NORMAL',
        ),
      ),
    ),
  ),
);