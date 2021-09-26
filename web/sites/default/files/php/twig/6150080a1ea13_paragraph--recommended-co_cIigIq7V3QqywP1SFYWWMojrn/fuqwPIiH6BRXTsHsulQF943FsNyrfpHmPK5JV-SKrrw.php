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

/* themes/custom/mytheme/templates/paragraph/paragraph--recommended-conferences.html.twig */
class __TwigTemplate_dbb35c1e419b4b830cda0b10c0207bbf91a1b7ef7a2417e7d28b18701cd10e62 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 44
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 44), 44, $this->source))), 2 => ((        // line 45
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 45, $this->source)))) : ("")), 3 => (( !twig_get_attribute($this->env, $this->source,         // line 46
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 46)) ? ("paragraph--unpublished") : (""))];
        // line 50
        $this->displayBlock('paragraph', $context, $blocks);
        // line 84
        echo "





";
    }

    // line 50
    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 51), 51, $this->source), "html", null, true);
        echo ">
<div class=\"card-wrapper\">
  <div class=\"card card--";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_badge", [], "any", false, false, true, 53)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["#items"] ?? null) : null), "getString", [], "method", false, false, true, 53), 53, $this->source), "html", null, true);
        echo "\">
    <div class=\"card__image\">
      ";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        echo "
    </div>
    <img src=\"/themes/custom/mytheme/images/badge.png\" alt=\"image\" class=\"card__badge\">
    <div class=\"card__price\">
      ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_price", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "
    </div>
    <div class=\"card__body\">
      <h5>";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "</h5>
      <div class=\"card__tags\">
        <i class=\"fas fa-tags\"></i>
        ";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_categories", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"card__calendar\">
        <i class=\"fas fa-calendar-alt\"></i>
        ";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_date", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"card__marker\">
        <i class=\"fas fa-map-marker-alt\"></i>
        ";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_address", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"share__block-wrapper\">
        <hr class=\"share_rule mt-1\">
        <div class=\"share__block\"><i class=\"far fa-heart\"></i><hr class=\"icon__rule\"/><i class=\"fas fa-download\"></i><hr class=\"icon__rule\"/><i class=\"fas fa-share-alt\"></i><hr class=\"icon__rule\"/><span>";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_button", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
        echo "</span></div>
      </div>
    </div>
  </div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/paragraph/paragraph--recommended-conferences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 77,  105 => 73,  98 => 69,  91 => 65,  85 => 62,  79 => 59,  72 => 55,  67 => 53,  61 => 51,  57 => 50,  47 => 84,  45 => 50,  43 => 46,  42 => 45,  41 => 44,  40 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a paragraph.
 *
 * Available variables:
 * - paragraph: Full paragraph entity.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - paragraph.getCreatedTime() will return the paragraph creation timestamp.
 *   - paragraph.id(): The paragraph ID.
 *   - paragraph.bundle(): The type of the paragraph, for example, \"image\" or \"text\".
 *   - paragraph.getOwnerId(): The user ID of the paragraph author.
 *   See Drupal\\paragraphs\\Entity\\Paragraph for a full list of public properties
 *   and methods for the paragraph object.
 * - content: All paragraph items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - paragraphs: The current template type (also known as a \"theming hook\").
 *   - paragraphs--type-[type]: The current paragraphs type. For example, if the paragraph is an
 *     \"Image\" it would result in \"paragraphs--type--image\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - paragraphs--view-mode--[view_mode]: The View Mode of the paragraph; for example, a
 *     preview would result in: \"paragraphs--view-mode--preview\", and
 *     default: \"paragraphs--view-mode--default\".
 * - view_mode: View mode; for example, \"preview\" or \"full\".
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_paragraph()
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    'paragraph',
    'paragraph--type--' ~ paragraph.bundle|clean_class,
    view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
    not paragraph.isPublished() ? 'paragraph--unpublished',
    
  ]
%}
{% block paragraph %}
<div{{ attributes.addClass(classes) }}>
<div class=\"card-wrapper\">
  <div class=\"card card--{{ content.field_badge['#items'].getString() }}\">
    <div class=\"card__image\">
      {{ content.field_image  }}
    </div>
    <img src=\"/themes/custom/mytheme/images/badge.png\" alt=\"image\" class=\"card__badge\">
    <div class=\"card__price\">
      {{ content.field_price }}
    </div>
    <div class=\"card__body\">
      <h5>{{ content.field_title }}</h5>
      <div class=\"card__tags\">
        <i class=\"fas fa-tags\"></i>
        {{ content.field_categories }}
      </div>
      <div class=\"card__calendar\">
        <i class=\"fas fa-calendar-alt\"></i>
        {{ content.field_date }}
      </div>
      <div class=\"card__marker\">
        <i class=\"fas fa-map-marker-alt\"></i>
        {{ content.field_address }}
      </div>
      <div class=\"share__block-wrapper\">
        <hr class=\"share_rule mt-1\">
        <div class=\"share__block\"><i class=\"far fa-heart\"></i><hr class=\"icon__rule\"/><i class=\"fas fa-download\"></i><hr class=\"icon__rule\"/><i class=\"fas fa-share-alt\"></i><hr class=\"icon__rule\"/><span>{{ content.field_button }}</span></div>
      </div>
    </div>
  </div>
</div>
</div>
{% endblock paragraph %}






", "themes/custom/mytheme/templates/paragraph/paragraph--recommended-conferences.html.twig", "/Users/tusharsachdeva/Sites/devdesktop/assignment/web/themes/custom/mytheme/templates/paragraph/paragraph--recommended-conferences.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "block" => 50);
        static $filters = array("clean_class" => 44, "escape" => 51);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['clean_class', 'escape'],
                []
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
