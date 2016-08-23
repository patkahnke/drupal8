<?php

/* @webprofiler/Collector/events.html.twig */
class __TwigTemplate_c00b075b6ca3313c253997661cb032fee2047d83627e6af18d22b6ccc2373038 extends Twig_Template
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
        $__internal_6aadccf90128e0606d6a5a093fccc089527fac9aeb0b0f55bd8d842537ce478e = $this->env->getExtension("native_profiler");
        $__internal_6aadccf90128e0606d6a5a093fccc089527fac9aeb0b0f55bd8d842537ce478e->enter($__internal_6aadccf90128e0606d6a5a093fccc089527fac9aeb0b0f55bd8d842537ce478e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/events.html.twig"));

        $tags = array("block" => 1, "set" => 2);
        $filters = array("t" => 3, "default" => 22);
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
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6aadccf90128e0606d6a5a093fccc089527fac9aeb0b0f55bd8d842537ce478e->leave($__internal_6aadccf90128e0606d6a5a093fccc089527fac9aeb0b0f55bd8d842537ce478e_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_274e895b4059dff44fa9e0f1429c247afdc24aa60ac61da93d2152d6de1d4446 = $this->env->getExtension("native_profiler");
        $__internal_274e895b4059dff44fa9e0f1429c247afdc24aa60ac61da93d2152d6de1d4446->enter($__internal_274e895b4059dff44fa9e0f1429c247afdc24aa60ac61da93d2152d6de1d4446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getUrl("webprofiler.dashboard", array("profile" => (isset($context["token"]) ? $context["token"] : null)), array("fragment" => "events")), "html", null, true));
        echo "\" title=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Events")));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Events")));
        echo "\"
             src=\"data:image/png;base64,";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "icon", array()), "html", null, true));
        echo "\">
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getCalledListenersCount", array()), "html", null, true));
        echo "</span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        echo "
    ";
        // line 10
        ob_start();
        // line 11
        echo "    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Triggered")));
        echo "</b>
        <span>";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getCalledListenersCount", array()), "html", null, true));
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Not triggered")));
        echo "</b>
        <span>";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getNotCalledListenersCount", array()), "html", null, true));
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 20
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>
";
        
        $__internal_274e895b4059dff44fa9e0f1429c247afdc24aa60ac61da93d2152d6de1d4446->leave($__internal_274e895b4059dff44fa9e0f1429c247afdc24aa60ac61da93d2152d6de1d4446_prof);

    }

    // line 27
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d11282e9ac9c378e8d24e24174756c1b52b15c968664ff5ab603e43a9df1ec26 = $this->env->getExtension("native_profiler");
        $__internal_d11282e9ac9c378e8d24e24174756c1b52b15c968664ff5ab603e43a9df1ec26->enter($__internal_d11282e9ac9c378e8d24e24174756c1b52b15c968664ff5ab603e43a9df1ec26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 28
        echo "    <script id=\"events\" type=\"text/template\">

        <h2 class=\"panel__title\">";
        // line 30
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Events")));
        echo "</h2>
        <div class=\"panel__container\">

            <table class=\"table--duo\">
                <thead>
                <th>";
        // line 35
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Called listeners")));
        echo "</th>
                <th>";
        // line 36
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Class")));
        echo "</th>
                <th>";
        // line 37
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Priority")));
        echo "</th>
                </thead>
                <tbody> <% _.each( data.called_listeners, function( item ){ %>
                <tr>
                    <td><%= item.event %></td>
                    <% if(item.type == 'Method') { %>
                    <td>
                        <%= Drupal.webprofiler.helpers.classLink(item) %>
                    </td>
                    <% } else { %>
                    <td>";
        // line 47
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Closure")));
        echo "</td>
                    <% } %>
                    <td><%= item.priority %></td>
                </tr>
                <% }); %>
                </tbody>
            </table>
        </div>
        <div class=\"panel__container\">

            <table class=\"table--duo\">
                <thead>
                <th>";
        // line 59
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Non called listeners")));
        echo "</th>
                <th>";
        // line 60
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Class")));
        echo "</th>
                </thead>
                <tbody>
                <% _.each( data.not_called_listeners, function( item ){ %>
                <tr>
                    <td><%= item.event %></td>
                    <% if(item.type == 'Method') { %>
                    <td>
                        <%= Drupal.webprofiler.helpers.classLink(item) %>
                    </td>
                    <% } else { %>
                    <td>";
        // line 71
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Closure")));
        echo "</td>
                    <% } %>
                </tr>
                <% }); %>
                </tbody>
            </table>
        </div>
    </script>
";
        
        $__internal_d11282e9ac9c378e8d24e24174756c1b52b15c968664ff5ab603e43a9df1ec26->leave($__internal_d11282e9ac9c378e8d24e24174756c1b52b15c968664ff5ab603e43a9df1ec26_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/events.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  208 => 71,  194 => 60,  190 => 59,  175 => 47,  162 => 37,  158 => 36,  154 => 35,  146 => 30,  142 => 28,  136 => 27,  126 => 23,  122 => 22,  118 => 20,  112 => 17,  108 => 16,  102 => 13,  98 => 12,  95 => 11,  93 => 10,  90 => 9,  84 => 6,  80 => 5,  76 => 4,  69 => 3,  66 => 2,  60 => 1,  53 => 27,  50 => 26,  48 => 1,);
    }
}
/* {% block toolbar %}*/
/*     {% set icon %}*/
/*     <a href="{{ url("webprofiler.dashboard", {profile: token}, {fragment: 'events'}) }}" title="{{ 'Events'|t }}">*/
/*         <img width="20" height="28" alt="{{ 'Events'|t }}"*/
/*              src="data:image/png;base64,{{ collector.icon }}">*/
/*         <span class="sf-toolbar-info-piece-additional sf-toolbar-status">{{ collector.getCalledListenersCount }}</span>*/
/*     </a>*/
/*     {% endset %}*/
/* */
/*     {% set text %}*/
/*     <div class="sf-toolbar-info-piece">*/
/*         <b>{{ 'Triggered'|t }}</b>*/
/*         <span>{{ collector.getCalledListenersCount }}</span>*/
/*     </div>*/
/*     <div class="sf-toolbar-info-piece">*/
/*         <b>{{ 'Not triggered'|t }}</b>*/
/*         <span>{{ collector.getNotCalledListenersCount }}</span>*/
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
/*     <script id="events" type="text/template">*/
/* */
/*         <h2 class="panel__title">{{ 'Events'|t }}</h2>*/
/*         <div class="panel__container">*/
/* */
/*             <table class="table--duo">*/
/*                 <thead>*/
/*                 <th>{{ 'Called listeners'|t }}</th>*/
/*                 <th>{{ 'Class'|t }}</th>*/
/*                 <th>{{ 'Priority'|t }}</th>*/
/*                 </thead>*/
/*                 <tbody> <% _.each( data.called_listeners, function( item ){ %>*/
/*                 <tr>*/
/*                     <td><%= item.event %></td>*/
/*                     <% if(item.type == 'Method') { %>*/
/*                     <td>*/
/*                         <%= Drupal.webprofiler.helpers.classLink(item) %>*/
/*                     </td>*/
/*                     <% } else { %>*/
/*                     <td>{{ 'Closure'|t }}</td>*/
/*                     <% } %>*/
/*                     <td><%= item.priority %></td>*/
/*                 </tr>*/
/*                 <% }); %>*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*         <div class="panel__container">*/
/* */
/*             <table class="table--duo">*/
/*                 <thead>*/
/*                 <th>{{ 'Non called listeners'|t }}</th>*/
/*                 <th>{{ 'Class'|t }}</th>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 <% _.each( data.not_called_listeners, function( item ){ %>*/
/*                 <tr>*/
/*                     <td><%= item.event %></td>*/
/*                     <% if(item.type == 'Method') { %>*/
/*                     <td>*/
/*                         <%= Drupal.webprofiler.helpers.classLink(item) %>*/
/*                     </td>*/
/*                     <% } else { %>*/
/*                     <td>{{ 'Closure'|t }}</td>*/
/*                     <% } %>*/
/*                 </tr>*/
/*                 <% }); %>*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </script>*/
/* {% endblock %}*/
/* */
