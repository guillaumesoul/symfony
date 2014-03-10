<?php

/* FirstBundle:Default:index.html.twig */
class __TwigTemplate_434f73aa901a0c1fec8cff55f78f2544b6f82ecd5c0b0d1eb975f0d10798c1e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!

Je vais mettre un joli tableau bootstrap<br>

Mis je vais commencer par un bouton pour être sur <br>

<button type=\"button\" class=\"btn btn-primary btn-lg active\">Link</button><br>

OK moiantenant un tableau

<table class=\"table table-bordered\">
<thead>
<tr>
\t<th>1</th>
\t<th>2</th>
\t<th>3</th>
</tr>\t
</thead>

<tbody>
<tr>
<td>HUH</td>
<td>gjfdjklgh</td>
<td>fhjdsfkh</td>
</tr>
<tr>
<td>gfdsgfsdfg</td>
<td>gfsdgfdsg</td>
<td>kjfhgkhgfj</td>
</tr>
<tr>
<td>trestrez</td>
<td>htdrfgh</td>
<td>hgfdhd</td>
</tr>
</tbody>

</table>

";
    }

    public function getTemplateName()
    {
        return "FirstBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
