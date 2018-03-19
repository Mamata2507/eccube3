<?php

/* __string_template__d9f54d048ab28ebdafff2120cc47d5f40613304bedd4da483d36490bfcbe3f25 */
class __TwigTemplate_fc3c9ad2eb07bf9fcd3365b740126c07cdb4cf3ce9dcf0b554da1712fed08972 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__d9f54d048ab28ebdafff2120cc47d5f40613304bedd4da483d36490bfcbe3f25", 22);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 24
        $context["menus"] = array(0 => "store", 1 => "authentication_setting");
        // line 29
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "オーナーズストア";
    }

    // line 27
    public function block_sub_title($context, array $blocks = array())
    {
        echo "認証キー設定";
    }

    // line 31
    public function block_main($context, array $blocks = array())
    {
        // line 32
        echo "    <form method=\"post\" action=\"";
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_store_authentication_setting");
        echo "\">
    ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
    <div class=\"row\" id=\"aside_wrap\">
        <div class=\"col-md-9\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">認証キー設定</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body form-horizontal\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 col-lg-2 control-label\">認証キー</label>
                        <div class=\"col-sm-9 col-lg-10\">
                            ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "authentication_key", array()), 'widget');
        echo "
                            ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "authentication_key", array()), 'errors');
        echo "
                            <p>※認証キーは<a target=\"_blank\" href=\"https://www.ec-cube.net/owners/\">EC-CUBEオーナーズストア</a>で取得できます。</p>
                        </div>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->

        <div class=\"col-md-3\" id=\"aside_column\">
            <div id=\"common_box\" class=\"col_inner\">
                <div class=\"box no-header\">
                    <div class=\"box-body\">
                        <div class=\"row text-center\">
                            <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                <button class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">設定</button>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div><!-- /.col -->
    </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "__string_template__d9f54d048ab28ebdafff2120cc47d5f40613304bedd4da483d36490bfcbe3f25";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 45,  69 => 44,  55 => 33,  50 => 32,  47 => 31,  41 => 27,  35 => 26,  31 => 22,  29 => 29,  27 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__d9f54d048ab28ebdafff2120cc47d5f40613304bedd4da483d36490bfcbe3f25", "");
    }
}
