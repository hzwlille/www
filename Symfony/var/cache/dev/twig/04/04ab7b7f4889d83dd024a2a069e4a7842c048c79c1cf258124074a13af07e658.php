<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_8135f70e7f1c156936a3ae959f06172379c0715ec50cc30b146d0c23032eb9d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8debc9cf3dc810ad0c3acb4bb82f44eef76129afc4e628a3f4ba6ce58bad8cff = $this->env->getExtension("native_profiler");
        $__internal_8debc9cf3dc810ad0c3acb4bb82f44eef76129afc4e628a3f4ba6ce58bad8cff->enter($__internal_8debc9cf3dc810ad0c3acb4bb82f44eef76129afc4e628a3f4ba6ce58bad8cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_8debc9cf3dc810ad0c3acb4bb82f44eef76129afc4e628a3f4ba6ce58bad8cff->leave($__internal_8debc9cf3dc810ad0c3acb4bb82f44eef76129afc4e628a3f4ba6ce58bad8cff_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
