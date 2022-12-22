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

/* modules/custom/current_date/templates/clock-template.html.twig */
class __TwigTemplate_622aae935577b8075b96a24a2d776287 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<p>Test clock twig template</p>
<p id='clock'></p>



<script type=\"text/javascript\">

document.getElementById(\"clock\").innerHTML = 'edited';


function currentTime() {
  let date = new Date(); 
  let hh = date.getHours();
  let mm = date.getMinutes();
  let ss = date.getSeconds();
  let session = \"AM\";

  if(hh == 0){
      hh = 12;
  }
  if(hh > 12){
      hh = hh - 12;
      session = \"PM\";
   }

   hh = (hh < 10) ? \"0\" + hh : hh;
   mm = (mm < 10) ? \"0\" + mm : mm;
   ss = (ss < 10) ? \"0\" + ss : ss;
    
   let time = hh + \":\" + mm + \":\" + ss + \" \" + session;



  document.getElementById(\"clock\").innerHTML = time;  
  let t = setTimeout(function(){ currentTime()}, 1000);
  /* let t = setTimeout(function(){ currentTime() }, 1000); */
}
currentTime();

</script>

";
    }

    public function getTemplateName()
    {
        return "modules/custom/current_date/templates/clock-template.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/current_date/templates/clock-template.html.twig", "/var/www/html/web/modules/custom/current_date/templates/clock-template.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
