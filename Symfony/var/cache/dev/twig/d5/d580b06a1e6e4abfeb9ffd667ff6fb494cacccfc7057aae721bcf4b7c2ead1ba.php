<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_ac4a06c9311c4be424d62ca126767de2e422a7a9d437f4dbab0b841063f23f65 extends Twig_Template
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
        $__internal_0e7fa1b0d0c72a0181c7e6eccf283c3adb9149d84a30da01da9467fc39f5b562 = $this->env->getExtension("native_profiler");
        $__internal_0e7fa1b0d0c72a0181c7e6eccf283c3adb9149d84a30da01da9467fc39f5b562->enter($__internal_0e7fa1b0d0c72a0181c7e6eccf283c3adb9149d84a30da01da9467fc39f5b562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_0e7fa1b0d0c72a0181c7e6eccf283c3adb9149d84a30da01da9467fc39f5b562->leave($__internal_0e7fa1b0d0c72a0181c7e6eccf283c3adb9149d84a30da01da9467fc39f5b562_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
