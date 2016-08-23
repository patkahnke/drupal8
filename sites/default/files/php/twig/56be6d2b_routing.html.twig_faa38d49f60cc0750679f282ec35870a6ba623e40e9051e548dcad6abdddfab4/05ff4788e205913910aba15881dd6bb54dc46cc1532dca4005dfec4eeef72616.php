<?php

/* @webprofiler/Collector/routing.html.twig */
class __TwigTemplate_781d4295dd935b66860a20e9acf3513cd72bdf4f7acc8b050a48d5314bfacfcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f82b53657ce3d6b2cad6a85c011ea2bf2212e088213a7b03a1a28a61fcd75f8 = $this->env->getExtension("native_profiler");
        $__internal_8f82b53657ce3d6b2cad6a85c011ea2bf2212e088213a7b03a1a28a61fcd75f8->enter($__internal_8f82b53657ce3d6b2cad6a85c011ea2bf2212e088213a7b03a1a28a61fcd75f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/routing.html.twig"));

        $tags = array("block" => 1, "set" => 2);
        $filters = array("t" => 3, "default" => 19);
        $functions = array("url" => 3);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block', 'set'),
                array('t', 'default'),
                array('url')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8f82b53657ce3d6b2cad6a85c011ea2bf2212e088213a7b03a1a28a61fcd75f8->leave($__internal_8f82b53657ce3d6b2cad6a85c011ea2bf2212e088213a7b03a1a28a61fcd75f8_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8ca9abf9b65dcc91c5f73ceb487af8ad621827d26d0071e2490e92b519ad755c = $this->env->getExtension("native_profiler");
        $__internal_8ca9abf9b65dcc91c5f73ceb487af8ad621827d26d0071e2490e92b519ad755c->enter($__internal_8ca9abf9b65dcc91c5f73ceb487af8ad621827d26d0071e2490e92b519ad755c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getUrl("webprofiler.dashboard", array("profile" => (isset($context["token"]) ? $context["token"] : null)), array("fragment" => "routing")), "html", null, true));
        echo "\" title=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Routing")));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Routing")));
        echo "\"
             src=\"data:image/png;base64,";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "icon", array()), "html", null, true));
        echo "\">
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getRoutesCount", array()), "html", null, true));
        echo "</span>
    </a>

    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Routes")));
        echo "</b>
        <span>";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getRoutesCount", array()), "html", null, true));
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 17
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>
";
        
        $__internal_8ca9abf9b65dcc91c5f73ceb487af8ad621827d26d0071e2490e92b519ad755c->leave($__internal_8ca9abf9b65dcc91c5f73ceb487af8ad621827d26d0071e2490e92b519ad755c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_32f79b001fe469fdcb019fc42a1717ee4ad13d7420a449352018d680e1a8e2b0 = $this->env->getExtension("native_profiler");
        $__internal_32f79b001fe469fdcb019fc42a1717ee4ad13d7420a449352018d680e1a8e2b0->enter($__internal_32f79b001fe469fdcb019fc42a1717ee4ad13d7420a449352018d680e1a8e2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <script id=\"routing\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 26
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Routing")));
        echo "</h2>
        <div class=\"panel__container\">
            <table class=\"table--duo\">
                <thead>
                <tr>
                    <th>";
        // line 31
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("name")));
        echo "</th>
                    <th>";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("path")));
        echo "</th>
                </tr>
                </thead>
                <tbody>
                <% _.each( data.routing, function( item ){ %>
                    <tr>
                        <td>
                            <%- item.name %>
                        </td>
                        <td>
                            <%- item.path %>
                        </td>
                    </tr>
                <% }); %>
                </tbody>
            </table>
        </div>
    </script>
";
        
        $__internal_32f79b001fe469fdcb019fc42a1717ee4ad13d7420a449352018d680e1a8e2b0->leave($__internal_32f79b001fe469fdcb019fc42a1717ee4ad13d7420a449352018d680e1a8e2b0_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/routing.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  148 => 32,  144 => 31,  136 => 26,  133 => 25,  127 => 24,  117 => 20,  113 => 19,  109 => 17,  103 => 14,  99 => 13,  96 => 12,  94 => 11,  91 => 10,  84 => 6,  80 => 5,  76 => 4,  69 => 3,  66 => 2,  60 => 1,  53 => 24,  50 => 23,  48 => 1,);
    }
}
/* {% block toolbar %}*/
/*     {% set icon %}*/
/*     <a href="{{ url("webprofiler.dashboard", {profile: token}, {fragment: 'routing'}) }}" title="{{ 'Routing'|t }}">*/
/*         <img width="20" height="28" alt="{{ 'Routing'|t }}"*/
/*              src="data:image/png;base64,{{ collector.icon }}">*/
/*         <span class="sf-toolbar-info-piece-additional sf-toolbar-status">{{ collector.getRoutesCount }}</span>*/
/*     </a>*/
/* */
/*     {% endset %}*/
/* */
/*     {% set text %}*/
/*     <div class="sf-toolbar-info-piece">*/
/*         <b>{{ 'Routes'|t }}</b>*/
/*         <span>{{ collector.getRoutesCount }}</span>*/
/*     </div>*/
/*     {% endset %}*/
/* */
/*     <div class="sf-toolbar-block">*/
/*         <div class="sf-toolbar-icon">{{ icon|default('') }}</div>*/
/*         <div class="sf-toolbar-info">{{ text|default('') }}</div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <script id="routing" type="text/template">*/
/*         <h2 class="panel__title">{{ 'Routing'|t }}</h2>*/
/*         <div class="panel__container">*/
/*             <table class="table--duo">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>{{ 'name'|t }}</th>*/
/*                     <th>{{ 'path'|t }}</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 <% _.each( data.routing, function( item ){ %>*/
/*                     <tr>*/
/*                         <td>*/
/*                             <%- item.name %>*/
/*                         </td>*/
/*                         <td>*/
/*                             <%- item.path %>*/
/*                         </td>*/
/*                     </tr>*/
/*                 <% }); %>*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </script>*/
/* {% endblock %}*/
/* */
