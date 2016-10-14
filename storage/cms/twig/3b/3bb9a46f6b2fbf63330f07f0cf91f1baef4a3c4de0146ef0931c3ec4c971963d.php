<?php

/* C:\xampp\htdocs\cms/plugins/milagro/catalog/components/products/default.htm */
class __TwigTemplate_bfe5df796cc19a792e1be7ab2959301704fe67bf0522c7be1a351aa099d08c97 extends Twig_Template
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
        if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "products", array())) {
            // line 2
            echo "    <ul>
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "products", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 4
                echo "            <li>
                <a href=\"";
                // line 5
                echo $this->env->getExtension('System')->appFilter(("produto/" . $this->getAttribute($context["product"], "slug", array())));
                echo "\">
                    <span>";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "</span>
                    <img src=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["product"], "images", array()), 0, array(), "array"), "thumb", array(0 => 250, 1 => (isset($context["auto"]) ? $context["auto"] : null)), "method"), "html", null, true);
                echo "\" alt=\"\">
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/plugins/milagro/catalog/components/products/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  39 => 7,  35 => 6,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if __SELF__.products %}*/
/*     <ul>*/
/*         {% for product in __SELF__.products %}*/
/*             <li>*/
/*                 <a href="{{ ('produto/' ~ product.slug)|app }}">*/
/*                     <span>{{ product.name }}</span>*/
/*                     <img src="{{ product.images[0].thumb(250,auto) }}" alt="">*/
/*                 </a>*/
/*             </li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* {% endif %}*/
