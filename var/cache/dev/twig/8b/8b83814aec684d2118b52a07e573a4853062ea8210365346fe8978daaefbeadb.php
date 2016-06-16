<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9cff2a1412c85d1a603866172bbfbc8b976bc3770e035dd425b138948e9cfe5d extends Twig_Template
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
        $__internal_527515115c65cb09fc2f5cbd18a9648e82159c67c0fdb3c5bfca03df165edf72 = $this->env->getExtension("native_profiler");
        $__internal_527515115c65cb09fc2f5cbd18a9648e82159c67c0fdb3c5bfca03df165edf72->enter($__internal_527515115c65cb09fc2f5cbd18a9648e82159c67c0fdb3c5bfca03df165edf72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_527515115c65cb09fc2f5cbd18a9648e82159c67c0fdb3c5bfca03df165edf72->leave($__internal_527515115c65cb09fc2f5cbd18a9648e82159c67c0fdb3c5bfca03df165edf72_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_58fbc07459e6387d68c754177576b5a901e8df83fa5c5c7c64d410610792586b = $this->env->getExtension("native_profiler");
        $__internal_58fbc07459e6387d68c754177576b5a901e8df83fa5c5c7c64d410610792586b->enter($__internal_58fbc07459e6387d68c754177576b5a901e8df83fa5c5c7c64d410610792586b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_58fbc07459e6387d68c754177576b5a901e8df83fa5c5c7c64d410610792586b->leave($__internal_58fbc07459e6387d68c754177576b5a901e8df83fa5c5c7c64d410610792586b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4a023753fdda46fd2a0612ff7923ba3b83ac2efccd15d28083ccc93a74e07f9d = $this->env->getExtension("native_profiler");
        $__internal_4a023753fdda46fd2a0612ff7923ba3b83ac2efccd15d28083ccc93a74e07f9d->enter($__internal_4a023753fdda46fd2a0612ff7923ba3b83ac2efccd15d28083ccc93a74e07f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4a023753fdda46fd2a0612ff7923ba3b83ac2efccd15d28083ccc93a74e07f9d->leave($__internal_4a023753fdda46fd2a0612ff7923ba3b83ac2efccd15d28083ccc93a74e07f9d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1babcd4e567eab9e52cace7a68d4135bf2ba223ee703d3ad063e07fd9ac96029 = $this->env->getExtension("native_profiler");
        $__internal_1babcd4e567eab9e52cace7a68d4135bf2ba223ee703d3ad063e07fd9ac96029->enter($__internal_1babcd4e567eab9e52cace7a68d4135bf2ba223ee703d3ad063e07fd9ac96029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1babcd4e567eab9e52cace7a68d4135bf2ba223ee703d3ad063e07fd9ac96029->leave($__internal_1babcd4e567eab9e52cace7a68d4135bf2ba223ee703d3ad063e07fd9ac96029_prof);

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
