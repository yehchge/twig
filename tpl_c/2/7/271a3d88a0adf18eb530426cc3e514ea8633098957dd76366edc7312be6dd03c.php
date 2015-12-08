<?php

/* test.html */
class __TwigTemplate_271a3d88a0adf18eb530426cc3e514ea8633098957dd76366edc7312be6dd03c extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>My Webpage</title>
    </head>
    <body>
\t\t";
        // line 8
        echo "        <ul id=\"navigation\">
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navigation"]) ? $context["navigation"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "href", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "caption", array()), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </ul>

        <h1>My Webpage</h1>
        ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["a_variable"]) ? $context["a_variable"] : null), "html", null, true);
        echo "
\t\t
\t\t<table>
\t\t  <tr>
\t\t    <td>
\t\t\t{ABCDEFG}
\t\t\t</td>
\t\t  </tr>
\t\t  <tr>
\t\t    <td>
\t\t\t";
        // line 32
        echo "
\t\t\t<div>HIJK{{</div>
\t\t\t <ul>
\t\t\t{% for item in seq %}
\t\t\t\t<li>{{ item }}</li>
\t\t\t{% endfor %}
\t\t\t</ul>
\t\t\t";
        echo "
\t\t\t</td>
\t\t  </tr>
\t\t  <tr>
\t\t    <td>
\t\t\tLMNOPQ
\t\t\t</td>
\t\t  </tr>
\t\t</table>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "test.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 32,  50 => 15,  45 => 12,  34 => 10,  30 => 9,  27 => 8,  19 => 1,);
    }
}
