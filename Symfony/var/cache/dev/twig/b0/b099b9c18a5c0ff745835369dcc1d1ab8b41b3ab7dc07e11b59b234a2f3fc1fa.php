<?php

/* base.html.twig */
class __TwigTemplate_8968afcf22da06906039ccb5dea2f4c8451c047da2697fea6dedd773d5ccf8f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab971891528fef026faf3232e0883e3e64f5d288f6b90952a98be1eeb146b858 = $this->env->getExtension("native_profiler");
        $__internal_ab971891528fef026faf3232e0883e3e64f5d288f6b90952a98be1eeb146b858->enter($__internal_ab971891528fef026faf3232e0883e3e64f5d288f6b90952a98be1eeb146b858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ab971891528fef026faf3232e0883e3e64f5d288f6b90952a98be1eeb146b858->leave($__internal_ab971891528fef026faf3232e0883e3e64f5d288f6b90952a98be1eeb146b858_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e67e2873376e6bcd436c2883a38e5f25a9045401146bed5953fd65e48e6f8e7c = $this->env->getExtension("native_profiler");
        $__internal_e67e2873376e6bcd436c2883a38e5f25a9045401146bed5953fd65e48e6f8e7c->enter($__internal_e67e2873376e6bcd436c2883a38e5f25a9045401146bed5953fd65e48e6f8e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e67e2873376e6bcd436c2883a38e5f25a9045401146bed5953fd65e48e6f8e7c->leave($__internal_e67e2873376e6bcd436c2883a38e5f25a9045401146bed5953fd65e48e6f8e7c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1fd1694295ecf8d48ecc4d72deb1b6b2555af15510e7e1e09d8ec08a4df27658 = $this->env->getExtension("native_profiler");
        $__internal_1fd1694295ecf8d48ecc4d72deb1b6b2555af15510e7e1e09d8ec08a4df27658->enter($__internal_1fd1694295ecf8d48ecc4d72deb1b6b2555af15510e7e1e09d8ec08a4df27658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1fd1694295ecf8d48ecc4d72deb1b6b2555af15510e7e1e09d8ec08a4df27658->leave($__internal_1fd1694295ecf8d48ecc4d72deb1b6b2555af15510e7e1e09d8ec08a4df27658_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f90cbd747dafeb1a66ad7f1c0eec306045d51c1c5dd1965d2cf4ed3f4e2de1b4 = $this->env->getExtension("native_profiler");
        $__internal_f90cbd747dafeb1a66ad7f1c0eec306045d51c1c5dd1965d2cf4ed3f4e2de1b4->enter($__internal_f90cbd747dafeb1a66ad7f1c0eec306045d51c1c5dd1965d2cf4ed3f4e2de1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f90cbd747dafeb1a66ad7f1c0eec306045d51c1c5dd1965d2cf4ed3f4e2de1b4->leave($__internal_f90cbd747dafeb1a66ad7f1c0eec306045d51c1c5dd1965d2cf4ed3f4e2de1b4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9cbc095c079cb1b2b95270505af2203ddbb9664cc51f264c710052d461bdfbce = $this->env->getExtension("native_profiler");
        $__internal_9cbc095c079cb1b2b95270505af2203ddbb9664cc51f264c710052d461bdfbce->enter($__internal_9cbc095c079cb1b2b95270505af2203ddbb9664cc51f264c710052d461bdfbce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9cbc095c079cb1b2b95270505af2203ddbb9664cc51f264c710052d461bdfbce->leave($__internal_9cbc095c079cb1b2b95270505af2203ddbb9664cc51f264c710052d461bdfbce_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
