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

/* themes/custom/mytheme/templates/block/block--conferences.html.twig */
class __TwigTemplate_d34bbc95b64cb62913f5e35bfc1aaa4b59b92140880967399a97daa64eb56ea4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 35
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 35), 35, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 36
($context["plugin_id"] ?? null), 36, $this->source))), 3 => "block-conferences"];
        // line 40
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 40), 40, $this->source), "html", null, true);
        echo ">
  ";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 41, $this->source), "html", null, true);
        echo "
  ";
        // line 42
        if (($context["label"] ?? null)) {
            // line 43
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 43, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 43, $this->source), "html", null, true);
            echo "</h2>
  ";
        }
        // line 45
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 45, $this->source), "html", null, true);
        echo "
  ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 64
        echo "</div>
";
    }

    // line 46
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "  \t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "
    \t";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_subtitle", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "
    <div";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "block-conferences__content"], "method", false, false, true, 49), 49, $this->source), "html", null, true);
        echo ">
      ";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\twig_tweak\TwigExtension']->drupalMenu("tabs"), "html", null, true);
        echo "
      <div class=\"tab-content\" id=\"nav-tabContent\" data-tabs-content=\"slider-tabs\">
        <div class=\"tab-pane fade slider__tabs show active\" id=\"";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter(twig_trim_filter(twig_lower_filter($this->env, strip_tags($this->sandbox->ensureToStringAllowed((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_featured_conferences", [], "any", false, false, true, 52)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["#title"] ?? null) : null), 52, $this->source)))), [" " => "-", ":" => "-"]), "html", null, true);
        echo "\" role=\"tabpanel\" aria-labelledby=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter(twig_trim_filter(twig_lower_filter($this->env, strip_tags($this->sandbox->ensureToStringAllowed((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_featured_conferences", [], "any", false, false, true, 52)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["#title"] ?? null) : null), 52, $this->source)))), [" " => "-", ":" => "-"]), "html", null, true);
        echo "-tab\">
          ";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_featured_conferences", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
        echo "
        </div>
        <div class=\"tab-pane fade slider__tabs\" id=\"";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter(twig_trim_filter(twig_lower_filter($this->env, strip_tags($this->sandbox->ensureToStringAllowed((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_pas", [], "any", false, false, true, 55)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["#title"] ?? null) : null), 55, $this->source)))), [" " => "-", ":" => "-"]), "html", null, true);
        echo "\" role=\"tabpanel\" aria-labelledby=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter(twig_trim_filter(twig_lower_filter($this->env, strip_tags($this->sandbox->ensureToStringAllowed((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_featured_conferences", [], "any", false, false, true, 55)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["#title"] ?? null) : null), 55, $this->source)))), [" " => "-", ":" => "-"]), "html", null, true);
        echo "-tab\">
          ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_pas", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "
        </div>
        <div class=\"tab-pane fade slider__tabs\" id=\"";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter(twig_trim_filter(twig_lower_filter($this->env, strip_tags($this->sandbox->ensureToStringAllowed((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_recommended_conferences", [], "any", false, false, true, 58)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["#title"] ?? null) : null), 58, $this->source)))), [" " => "-", ":" => "-"]), "html", null, true);
        echo "\" role=\"tabpanel\" aria-labelledby=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter(twig_trim_filter(twig_lower_filter($this->env, strip_tags($this->sandbox->ensureToStringAllowed((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_featured_conferences", [], "any", false, false, true, 58)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["#title"] ?? null) : null), 58, $this->source)))), [" " => "-", ":" => "-"]), "html", null, true);
        echo "-tab\">
          ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_recommended_conferences", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/block/block--conferences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 59,  119 => 58,  114 => 56,  108 => 55,  103 => 53,  97 => 52,  92 => 50,  88 => 49,  84 => 48,  79 => 47,  75 => 46,  70 => 64,  68 => 46,  63 => 45,  55 => 43,  53 => 42,  49 => 41,  44 => 40,  42 => 36,  41 => 35,  40 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main content
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    'block',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
    'block-conferences',
  ]
%}
<div{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {% if label %}
    <h2{{ title_attributes }}>{{ label }}</h2>
  {% endif %}
  {{ title_suffix }}
  {% block content %}
  \t{{ content.field_title }}
    \t{{ content.field_subtitle }}
    <div{{ content_attributes.addClass('block-conferences__content') }}>
      {{ drupal_menu('tabs') }}
      <div class=\"tab-content\" id=\"nav-tabContent\" data-tabs-content=\"slider-tabs\">
        <div class=\"tab-pane fade slider__tabs show active\" id=\"{{ content.field_featured_conferences['#title']|raw|striptags|lower|trim|replace({' ':'-',':':'-'}) }}\" role=\"tabpanel\" aria-labelledby=\"{{ content.field_featured_conferences['#title']|raw|striptags|lower|trim|replace({' ':'-',':':'-'}) }}-tab\">
          {{ content.field_featured_conferences }}
        </div>
        <div class=\"tab-pane fade slider__tabs\" id=\"{{ content.field_pas['#title']|raw|striptags|lower|trim|replace({' ':'-',':':'-'}) }}\" role=\"tabpanel\" aria-labelledby=\"{{ content.field_featured_conferences['#title']|raw|striptags|lower|trim|replace({' ':'-',':':'-'}) }}-tab\">
          {{ \tcontent.field_pas }}
        </div>
        <div class=\"tab-pane fade slider__tabs\" id=\"{{ content.field_recommended_conferences['#title']|raw|striptags|lower|trim|replace({' ':'-',':':'-'}) }}\" role=\"tabpanel\" aria-labelledby=\"{{ content.field_featured_conferences['#title']|raw|striptags|lower|trim|replace({' ':'-',':':'-'}) }}-tab\">
          {{ content.field_recommended_conferences }}
        </div>
      </div>
    </div>
  {% endblock %}
</div>
", "themes/custom/mytheme/templates/block/block--conferences.html.twig", "/Users/tusharsachdeva/Sites/devdesktop/assignment/web/themes/custom/mytheme/templates/block/block--conferences.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 33, "if" => 42, "block" => 46);
        static $filters = array("clean_class" => 35, "escape" => 40, "replace" => 52, "trim" => 52, "lower" => 52, "striptags" => 52, "raw" => 52);
        static $functions = array("drupal_menu" => 50);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 'replace', 'trim', 'lower', 'striptags', 'raw'],
                ['drupal_menu']
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
