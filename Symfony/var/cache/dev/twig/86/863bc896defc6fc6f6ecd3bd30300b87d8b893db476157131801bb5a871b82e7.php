<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_22383cb7fbba1b563ee8ee9d06cdae266cf668eb66f50374a475d918000eb842 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8090483853d7ad582817cfddfe2c91adf78c5f6683f58b6b0c93018eb7ab41df = $this->env->getExtension("native_profiler");
        $__internal_8090483853d7ad582817cfddfe2c91adf78c5f6683f58b6b0c93018eb7ab41df->enter($__internal_8090483853d7ad582817cfddfe2c91adf78c5f6683f58b6b0c93018eb7ab41df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8090483853d7ad582817cfddfe2c91adf78c5f6683f58b6b0c93018eb7ab41df->leave($__internal_8090483853d7ad582817cfddfe2c91adf78c5f6683f58b6b0c93018eb7ab41df_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_94394a84378f9eb5900f55e1cd8468b487a5474aa4c64513eb9a56b4531559a2 = $this->env->getExtension("native_profiler");
        $__internal_94394a84378f9eb5900f55e1cd8468b487a5474aa4c64513eb9a56b4531559a2->enter($__internal_94394a84378f9eb5900f55e1cd8468b487a5474aa4c64513eb9a56b4531559a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_94394a84378f9eb5900f55e1cd8468b487a5474aa4c64513eb9a56b4531559a2->leave($__internal_94394a84378f9eb5900f55e1cd8468b487a5474aa4c64513eb9a56b4531559a2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_aac91bdd571992422875c14b4b72e6fd87897769e2bafa4077ac14fbee9dc014 = $this->env->getExtension("native_profiler");
        $__internal_aac91bdd571992422875c14b4b72e6fd87897769e2bafa4077ac14fbee9dc014->enter($__internal_aac91bdd571992422875c14b4b72e6fd87897769e2bafa4077ac14fbee9dc014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_aac91bdd571992422875c14b4b72e6fd87897769e2bafa4077ac14fbee9dc014->leave($__internal_aac91bdd571992422875c14b4b72e6fd87897769e2bafa4077ac14fbee9dc014_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccfcf381e00eb5ae54d312ef0d6c818dd026c484150472ea1a29c895ea0d49c7 = $this->env->getExtension("native_profiler");
        $__internal_ccfcf381e00eb5ae54d312ef0d6c818dd026c484150472ea1a29c895ea0d49c7->enter($__internal_ccfcf381e00eb5ae54d312ef0d6c818dd026c484150472ea1a29c895ea0d49c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ccfcf381e00eb5ae54d312ef0d6c818dd026c484150472ea1a29c895ea0d49c7->leave($__internal_ccfcf381e00eb5ae54d312ef0d6c818dd026c484150472ea1a29c895ea0d49c7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
