<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_34d336665b36b7b23601c3180805698cb4f725da9a3c64b5d9e7fac8a1e50136 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4db12798d20144c6310b5c1c671f5695528d41961f77535d84146dca5110cf3 = $this->env->getExtension("native_profiler");
        $__internal_f4db12798d20144c6310b5c1c671f5695528d41961f77535d84146dca5110cf3->enter($__internal_f4db12798d20144c6310b5c1c671f5695528d41961f77535d84146dca5110cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4db12798d20144c6310b5c1c671f5695528d41961f77535d84146dca5110cf3->leave($__internal_f4db12798d20144c6310b5c1c671f5695528d41961f77535d84146dca5110cf3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_60b06752ccb9dd4f70c9aadb8256355633c3aaa77d552e56d0257091a8e5cce8 = $this->env->getExtension("native_profiler");
        $__internal_60b06752ccb9dd4f70c9aadb8256355633c3aaa77d552e56d0257091a8e5cce8->enter($__internal_60b06752ccb9dd4f70c9aadb8256355633c3aaa77d552e56d0257091a8e5cce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_60b06752ccb9dd4f70c9aadb8256355633c3aaa77d552e56d0257091a8e5cce8->leave($__internal_60b06752ccb9dd4f70c9aadb8256355633c3aaa77d552e56d0257091a8e5cce8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7707afa941cf627439ca4b17c504e68c6de35729b9457ef8bdf8c511f8925cb4 = $this->env->getExtension("native_profiler");
        $__internal_7707afa941cf627439ca4b17c504e68c6de35729b9457ef8bdf8c511f8925cb4->enter($__internal_7707afa941cf627439ca4b17c504e68c6de35729b9457ef8bdf8c511f8925cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7707afa941cf627439ca4b17c504e68c6de35729b9457ef8bdf8c511f8925cb4->leave($__internal_7707afa941cf627439ca4b17c504e68c6de35729b9457ef8bdf8c511f8925cb4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_31c2e6d9951084873ddc10724f31a361e947a17dcc4048c856d6b60e94c31de8 = $this->env->getExtension("native_profiler");
        $__internal_31c2e6d9951084873ddc10724f31a361e947a17dcc4048c856d6b60e94c31de8->enter($__internal_31c2e6d9951084873ddc10724f31a361e947a17dcc4048c856d6b60e94c31de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_31c2e6d9951084873ddc10724f31a361e947a17dcc4048c856d6b60e94c31de8->leave($__internal_31c2e6d9951084873ddc10724f31a361e947a17dcc4048c856d6b60e94c31de8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
