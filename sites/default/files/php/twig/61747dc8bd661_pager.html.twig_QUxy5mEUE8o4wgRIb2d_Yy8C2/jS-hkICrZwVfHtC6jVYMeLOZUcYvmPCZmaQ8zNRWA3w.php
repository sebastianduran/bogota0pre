<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/bootstrap/templates/system/pager.html.twig */
class __TwigTemplate_0637a79fbf95bc8be7ae6effc4e31657037fe05534eb836f519acc8b2a6f746d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 34
        if (($context["items"] ?? null)) {
            // line 35
            echo "  <nav class=\"pager-nav text-center\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 id=\"pagination-heading\" class=\"visually-hidden\">";
            // line 36
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Pagination"));
            echo "</h4>
    <ul class=\"pagination js-pager__items\">

      ";
            // line 40
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "first", [])) {
                // line 41
                echo "        <li class=\"pager__item pager__item--first\">
          <a href=\"";
                // line 42
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", []), "href", [])), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to first page"));
                echo "\" rel=\"first\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", []), "attributes", [])), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 43
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("First page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 44
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", [], "any", false, true), "text", [])), t("first"))) : (t("first"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 48
            echo "
      ";
            // line 50
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "previous", [])) {
                // line 51
                echo "        <li class=\"pager__item pager__item--previous\">
          <a href=\"";
                // line 52
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "href", [])), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "attributes", [])), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 53
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Previous page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 54
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", [], "any", false, true), "text", [])), t("previous"))) : (t("previous"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 58
            echo "
      ";
            // line 60
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["items"] ?? null), "pages", []));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 61
                echo "        <li class=\"pager__item";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" is-active active") : ("")));
                echo "\">
          ";
                // line 62
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 63
                    echo "            ";
                    $context["title"] = t("Current page");
                    // line 64
                    echo "          ";
                } else {
                    // line 65
                    echo "            ";
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                    // line 66
                    echo "          ";
                }
                // line 67
                echo "          <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "href", [])), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
                echo "\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "attributes", [])), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">
              ";
                // line 69
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                echo "
            </span>";
                // line 71
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"]), "html", null, true);
                // line 72
                echo "</a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "
      ";
            // line 77
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "next", [])) {
                // line 78
                echo "        <li class=\"pager__item pager__item--next\">
          <a href=\"";
                // line 79
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "href", [])), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "attributes", [])), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 80
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Next page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 81
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", [], "any", false, true), "text", [])), t("next"))) : (t("next"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 85
            echo "
      ";
            // line 87
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "last", [])) {
                // line 88
                echo "      <li class=\"pager__item pager__item--last\">
        <a href=\"";
                // line 89
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", []), "href", [])), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to last page"));
                echo "\" rel=\"last\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", []), "attributes", [])), "html", null, true);
                echo ">
          <span class=\"visually-hidden\">";
                // line 90
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Last page"));
                echo "</span>
          <span aria-hidden=\"true\">";
                // line 91
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", [], "any", false, true), "text", [])), t("last"))) : (t("last"))), "html", null, true);
                echo "</span>
        </a>
      </li>
      ";
            }
            // line 95
            echo "
    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/system/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 95,  196 => 91,  192 => 90,  184 => 89,  181 => 88,  178 => 87,  175 => 85,  168 => 81,  164 => 80,  156 => 79,  153 => 78,  150 => 77,  147 => 75,  139 => 72,  137 => 71,  133 => 69,  123 => 67,  120 => 66,  117 => 65,  114 => 64,  111 => 63,  109 => 62,  104 => 61,  99 => 60,  96 => 58,  89 => 54,  85 => 53,  77 => 52,  74 => 51,  71 => 50,  68 => 48,  61 => 44,  57 => 43,  49 => 42,  46 => 41,  43 => 40,  37 => 36,  34 => 35,  32 => 34,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bootstrap/templates/system/pager.html.twig", "C:\\xampp\\htdocs\\alpha\\drupal\\themes\\bootstrap\\templates\\system\\pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 34, "for" => 60, "set" => 63];
        static $filters = ["t" => 36, "escape" => 42, "default" => 44];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['t', 'escape', 'default'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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
