<?php

/* C:\xampp\htdocs\cms/themes/bootstrap/layouts/default.htm */
class __TwigTemplate_357a7e19f3004847db8417f88f18cdd7c38800c787c0dc52f49fdfb9d481b7b3 extends Twig_Template
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
<html lang=\"en\">
  <head>    
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    ";
        // line 8
        $context['__placeholder_styles_default_contents'] = null;        ob_start();        // line 9
        echo "        <link rel=\"stylesheet\" href=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/bootstrap.min.css");
        echo "\">
    ";
        $context['__placeholder_styles_default_contents'] = ob_get_clean();        // line 8
        echo $this->env->getExtension('CMS')->displayBlock('styles', $context['__placeholder_styles_default_contents']);
        unset($context['__placeholder_styles_default_contents']);        // line 11
        echo "  </head>
  <body>
    ";
        // line 13
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 14
        echo "    ";
        $context['__placeholder_script_default_contents'] = null;        ob_start();        // line 15
        echo "        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js\" integrity=\"sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js\" integrity=\"sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js\" integrity=\"VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU\" crossorigin=\"anonymous\"></script>
    ";
        $context['__placeholder_script_default_contents'] = ob_get_clean();        // line 14
        echo $this->env->getExtension('CMS')->displayBlock('script', $context['__placeholder_script_default_contents']);
        unset($context['__placeholder_script_default_contents']);        // line 19
        echo "    
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/themes/bootstrap/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 19,  50 => 14,  44 => 15,  42 => 14,  40 => 13,  36 => 11,  34 => 8,  29 => 9,  28 => 8,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>    */
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">*/
/*     <meta http-equiv="x-ua-compatible" content="ie=edge">*/
/* */
/*     {% placeholder styles default %}*/
/*         <link rel="stylesheet" href="{{ 'assets/css/bootstrap.min.css'|theme }}">*/
/*     {% endplaceholder %}*/
/*   </head>*/
/*   <body>*/
/*     {% page %}*/
/*     {% placeholder script default %}*/
/*         <!-- jQuery first, then Tether, then Bootstrap JS. -->*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>*/
/*         <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>*/
/*     {% endplaceholder %}    */
/*   </body>*/
/* </html>*/
