<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/mytheme/templates/navigation/menu--tabs.html.twig */
class __TwigTemplate_daecfe9f0bb3cf39648b4edeb9a98509b251f3f58ae44a4a93f4a5e1ceb6ff25 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null)], 27, $context, $this->getSourceContext()));
        echo "
";
    }

    // line 28
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 29
            echo "
  ";
            // line 30
            $macros["menus"] = $this;
            // line 31
            echo "  ";
            // line 32
            $context["menu_classes"] = [0 => "d-flex", 1 => "nav", 2 => "nav__tabs"];
            // line 38
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 39
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 40
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["menu_classes"] ?? null)], "method", false, false, true, 40), "setAttribute", [0 => "id", 1 => "slider-tabs"], "method", false, false, true, 40), 40, $this->source), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 42
                    echo "      <ul class=\"menu\">
    ";
                }
                // line 44
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 45
                    echo "      ";
                    // line 46
                    $context["classes"] = [0 => "col-lg-4", 1 => "text-center", 2 => "nav-item", 3 => "nav-link", 4 => ((twig_get_attribute($this->env, $this->source,                     // line 51
$context["item"], "is_expanded", [], "any", false, false, true, 51)) ? ("menu-item--expanded") : ("")), 5 => ((twig_get_attribute($this->env, $this->source,                     // line 52
$context["item"], "is_collapsed", [], "any", false, false, true, 52)) ? ("menu-item--collapsed") : ("")), 6 => ((twig_get_attribute($this->env, $this->source,                     // line 53
$context["item"], "in_active_trail", [], "any", false, false, true, 53)) ? ("menu-item--active-trail") : (""))];
                    // line 56
                    echo "      <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 56), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 56), 56, $this->source), "html", null, true);
                    echo ">
        ";
                    // line 58
                    $context["link_classes"] = [0 => "nav-link", 1 => ((twig_get_attribute($this->env, $this->source,                     // line 60
$context["item"], "in_active_trail", [], "any", false, false, true, 60)) ? ("active") : ("")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 61
$context["item"], "url", [], "any", false, false, true, 61), "getOption", [0 => "attributes"], "method", false, false, true, 61), "class", [], "any", false, false, true, 61)) ? (twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 61), "getOption", [0 => "attributes"], "method", false, false, true, 61), "class", [], "any", false, false, true, 61), 61, $this->source), "")) : ("")), 3 => ("nav-link-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 62
$context["item"], "url", [], "any", false, false, true, 62), "toString", [], "method", false, false, true, 62), 62, $this->source)))];
                    // line 65
                    echo "        ";
                    // line 66
                    $context["toggle"] = [0 => "tab"];
                    // line 70
                    echo "        ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 70), 70, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 70), 70, $this->source), ["class" => ($context["link_classes"] ?? null)], ["data-toggle" => ($context["toggle"] ?? null)]), "html", null, true);
                    echo "
        ";
                    // line 71
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 71)) {
                        // line 72
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 72), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 72, $context, $this->getSourceContext()));
                        echo "
        ";
                    }
                    // line 74
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/navigation/menu--tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 76,  129 => 74,  123 => 72,  121 => 71,  116 => 70,  114 => 66,  112 => 65,  110 => 62,  109 => 61,  108 => 60,  107 => 58,  102 => 56,  100 => 53,  99 => 52,  98 => 51,  97 => 46,  95 => 45,  90 => 44,  86 => 42,  80 => 40,  77 => 39,  74 => 38,  72 => 32,  70 => 31,  68 => 30,  65 => 29,  50 => 28,  44 => 27,  41 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0, menu_name) }}
{% macro menu_links(items, attributes, menu_level) %}

  {% import _self as menus %}
  {%
  set menu_classes = [
    'd-flex', 
    'nav', 
    'nav__tabs', 
  ]
%}
  {% if items %}
    {% if menu_level == 0 %}
      <ul{{ attributes.addClass(menu_classes).setAttribute('id', 'slider-tabs')  }}>
    {% else %}
      <ul class=\"menu\">
    {% endif %}
    {% for item in items %}
      {%
        set classes = [
          'col-lg-4',
          'text-center',
          'nav-item',
          'nav-link',
          item.is_expanded ? 'menu-item--expanded',
          item.is_collapsed ? 'menu-item--collapsed',
          item.in_active_trail ? 'menu-item--active-trail',
        ]
      %}
      <li{{ item.attributes.addClass(classes) }}>
        {%
          set link_classes = [
            'nav-link',
            item.in_active_trail ? 'active',
            item.url.getOption('attributes').class ? item.url.getOption('attributes').class | join(''),
            'nav-link-' ~ item.url.toString() | clean_class,
          ]
        %}
        {%
          set toggle = [
            'tab',
          ]
        %}
        {{ link(item.title, item.url, {'class': link_classes},{'data-toggle': toggle}) }}
        {% if item.below %}
          {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
        {% endif %}
      </li>
    {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}
", "themes/custom/mytheme/templates/navigation/menu--tabs.html.twig", "/Users/tusharsachdeva/Sites/devdesktop/assignment/web/themes/custom/mytheme/templates/navigation/menu--tabs.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 21, "macro" => 28, "set" => 32, "if" => 38, "for" => 44);
        static $filters = array("escape" => 40, "join" => 61, "clean_class" => 62);
        static $functions = array("link" => 70);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'set', 'if', 'for'],
                ['escape', 'join', 'clean_class'],
                ['link']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
