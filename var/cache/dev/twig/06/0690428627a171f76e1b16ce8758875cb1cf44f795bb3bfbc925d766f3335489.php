<?php

/* base.html.twig */
class __TwigTemplate_e8dbd493dd06f6c5fa74f43afbfeac76c5056b8f15da635fb4371db8bc871095 extends Twig_Template
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
        $__internal_344560fb31dd010378e63da0ada82e15f37a8b85cbbc75da70a5050abd69d88b = $this->env->getExtension("native_profiler");
        $__internal_344560fb31dd010378e63da0ada82e15f37a8b85cbbc75da70a5050abd69d88b->enter($__internal_344560fb31dd010378e63da0ada82e15f37a8b85cbbc75da70a5050abd69d88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_344560fb31dd010378e63da0ada82e15f37a8b85cbbc75da70a5050abd69d88b->leave($__internal_344560fb31dd010378e63da0ada82e15f37a8b85cbbc75da70a5050abd69d88b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ee480d28cc06eba3356f73949502bce8e477b3052310cfbd50135cad99c6ab3 = $this->env->getExtension("native_profiler");
        $__internal_8ee480d28cc06eba3356f73949502bce8e477b3052310cfbd50135cad99c6ab3->enter($__internal_8ee480d28cc06eba3356f73949502bce8e477b3052310cfbd50135cad99c6ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8ee480d28cc06eba3356f73949502bce8e477b3052310cfbd50135cad99c6ab3->leave($__internal_8ee480d28cc06eba3356f73949502bce8e477b3052310cfbd50135cad99c6ab3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ba29c969d22ab4b2bc04beee7127f0873e6c7a7f8d535de60854eb04725fb462 = $this->env->getExtension("native_profiler");
        $__internal_ba29c969d22ab4b2bc04beee7127f0873e6c7a7f8d535de60854eb04725fb462->enter($__internal_ba29c969d22ab4b2bc04beee7127f0873e6c7a7f8d535de60854eb04725fb462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ba29c969d22ab4b2bc04beee7127f0873e6c7a7f8d535de60854eb04725fb462->leave($__internal_ba29c969d22ab4b2bc04beee7127f0873e6c7a7f8d535de60854eb04725fb462_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_60734b42873c19f95095008c156ff6beccba40b97a806ac24c7dddbbdbde2873 = $this->env->getExtension("native_profiler");
        $__internal_60734b42873c19f95095008c156ff6beccba40b97a806ac24c7dddbbdbde2873->enter($__internal_60734b42873c19f95095008c156ff6beccba40b97a806ac24c7dddbbdbde2873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_60734b42873c19f95095008c156ff6beccba40b97a806ac24c7dddbbdbde2873->leave($__internal_60734b42873c19f95095008c156ff6beccba40b97a806ac24c7dddbbdbde2873_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_69ed62794fa3168fd3fac2276ae24a9634960004392a4ffe01cf8736381ef08e = $this->env->getExtension("native_profiler");
        $__internal_69ed62794fa3168fd3fac2276ae24a9634960004392a4ffe01cf8736381ef08e->enter($__internal_69ed62794fa3168fd3fac2276ae24a9634960004392a4ffe01cf8736381ef08e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_69ed62794fa3168fd3fac2276ae24a9634960004392a4ffe01cf8736381ef08e->leave($__internal_69ed62794fa3168fd3fac2276ae24a9634960004392a4ffe01cf8736381ef08e_prof);

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
