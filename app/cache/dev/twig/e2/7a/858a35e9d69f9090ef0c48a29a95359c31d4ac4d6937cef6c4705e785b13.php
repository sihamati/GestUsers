<?php

/* path1GesUsersBundle:ManageUsers:ListUsers.html.twig */
class __TwigTemplate_e27a858a35e9d69f9090ef0c48a29a95359c31d4ac4d6937cef6c4705e785b13 extends Twig_Template
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
        echo "GesUsersBundle:ManageUsrsController:ListUsers";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Welcome to List Users page</h1>
<table border=\"1\" align=\"center\">
<tr><th>ID</th><th>Name</th><th>Nationality</th><th>Age</th><th>Gender</th></tr>

";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 11
            echo "<tr>
<td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "</td>
<td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "name", array()), "html", null, true);
            echo "</td>
<td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "Nationality", array()), "html", null, true);
            echo "</td>
<td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "Age", array()), "html", null, true);
            echo "</td>
<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "gender", array()), "html", null, true);
            echo "</td>
<td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_update_user", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>
<td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_delete_user", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</table>
<table align=\"center\">
<form action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("_add_user");
        echo "\" method='post'>
<input type='submit' value='Ajouter User'/>
</form>
</table>
";
    }

    public function getTemplateName()
    {
        return "path1GesUsersBundle:ManageUsers:ListUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 23,  92 => 21,  83 => 18,  79 => 17,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  56 => 11,  52 => 10,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
