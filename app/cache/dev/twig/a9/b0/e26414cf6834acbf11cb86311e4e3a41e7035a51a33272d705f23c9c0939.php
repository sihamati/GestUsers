<?php

/* path1GesUsersBundle:ManageUsers:UpdateUser.html.twig */
class __TwigTemplate_a9b0e26414cf6834acbf11cb86311e4e3a41e7035a51a33272d705f23c9c0939 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "path1GesUsersBundle:ManageUsers:UpdateUser";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Welcome to the ManageUsers:UpdateUser page</h1>
<form action=\"\" method='post'>
";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<input type='submit' value='Save'/>
";
    }

    public function getTemplateName()
    {
        return "path1GesUsersBundle:ManageUsers:UpdateUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 8,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
