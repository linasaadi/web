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

/* author/list.html.twig */
class __TwigTemplate_5f9fddcbdc1e201a70b5e85a87c7b871 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/list.html.twig"));

        // line 2
        $context["s"] = 0;
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["auteurs"]) || array_key_exists("auteurs", $context) ? $context["auteurs"] : (function () { throw new RuntimeError('Variable "auteurs" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 4
            $context["s"] = ((isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 4, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["k"], "nb_books", [], "any", false, false, false, 4));
            echo "    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "
<h1> la list des auteur </h1>

<table border=1px> 
    <tr> 
        <th> id </th>
        <th> userName </th>
        <th> Image </th>
        <th> nbr group </th>
        <th>details</th>

    </tr>
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["auteurs"]) || array_key_exists("auteurs", $context) ? $context["auteurs"] : (function () { throw new RuntimeError('Variable "auteurs" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 19
            echo "    <tr> 
        <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "username", [], "any", false, false, false, 21)), "html", null, true);
            echo "</td>
        <td><img src=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "picture", [], "any", false, false, false, 22), "html", null, true);
            echo "\" width = \"100\" </td>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "nb_books", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
        <td> <form action = \"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detailA", ["i" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 24), "n" => twig_get_attribute($this->env, $this->source, $context["i"], "nb_books", [], "any", false, false, false, 24)]), "html", null, true);
            // line 25
            echo "\"> <button> details !</button></form></td>
        ";
            // line 27
            echo "       ";
            // line 28
            echo "    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    
</table>
<h2> le nombre de auteur est ";
        // line 32
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["auteurs"]) || array_key_exists("auteurs", $context) ? $context["auteurs"] : (function () { throw new RuntimeError('Variable "auteurs" does not exist.', 32, $this->source); })())), "html", null, true);
        echo " </h2>
<h3> le nombre de livre est ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 33, $this->source); })()), "html", null, true);
        echo " </h3>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "author/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 33,  109 => 32,  105 => 30,  98 => 28,  96 => 27,  93 => 25,  91 => 24,  87 => 23,  83 => 22,  79 => 21,  75 => 20,  72 => 19,  68 => 18,  54 => 6,  46 => 4,  42 => 3,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#calcule somme #}
{% set s = 0 %}
{% for k in auteurs %}
{% set s = s+k.nb_books %}    
{% endfor %}

<h1> la list des auteur </h1>

<table border=1px> 
    <tr> 
        <th> id </th>
        <th> userName </th>
        <th> Image </th>
        <th> nbr group </th>
        <th>details</th>

    </tr>
    {%  for i in auteurs %}
    <tr> 
        <td>{{i.id }}</td>
        <td>{{i.username |upper  }}</td>
        <td><img src=\"{{i.picture }}\" width = \"100\" </td>
        <td>{{i.nb_books}}</td>
        <td> <form action = \"{{path ('detailA',{'i':i.id,'n':i.nb_books})     
        }}\"> <button> details !</button></form></td>
        {# 2eme methode #}
       {# <td><a href=\"{{path ('detailA',{'i':i.id,'n':i.nb_books})}}\">dtails</a></td>#}
    </tr>
    {% endfor %}
    
</table>
<h2> le nombre de auteur est {{auteurs|length }} </h2>
<h3> le nombre de livre est {{s}} </h3>

", "author/list.html.twig", "C:\\Users\\khali\\OneDrive\\Bureau\\synfony\\FirstProject\\templates\\author\\list.html.twig");
    }
}
