<?php

/* {# inline_template_start #}<code>/admin/commerce/wishlists/{commerce_wishlist}</code>: GET, PATCH, DELETE</br><code>/entity/commerce_wishlist</code>: POST */
class __TwigTemplate_a4e2c9e7f093d8c4cb4022a52c8638756b5098620278fb33d17eaf3c585df6ef extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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
        echo "<code>/admin/commerce/wishlists/{commerce_wishlist}</code>: GET, PATCH, DELETE</br><code>/entity/commerce_wishlist</code>: POST";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/admin/commerce/wishlists/{commerce_wishlist}</code>: GET, PATCH, DELETE</br><code>/entity/commerce_wishlist</code>: POST";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<code>/admin/commerce/wishlists/{commerce_wishlist}</code>: GET, PATCH, DELETE</br><code>/entity/commerce_wishlist</code>: POST", "");
    }
}
