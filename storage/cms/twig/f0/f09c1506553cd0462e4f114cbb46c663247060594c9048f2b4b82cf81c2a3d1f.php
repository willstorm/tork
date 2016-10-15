<?php

/* C:\xampp\htdocs\cms/themes/tork/layouts/default.htm */
class __TwigTemplate_5b955bdcac9dcd6ce4f7f993c568bffe7d279d0bd70219f614414f345c8f6745 extends Twig_Template
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
        echo "            <link href=\"https://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/bootstrap.min.css");
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/font-awesome.min.css");
        echo "\">            
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/style.css");
        echo "\">            
        ";
        $context['__placeholder_styles_default_contents'] = ob_get_clean();        // line 8
        echo $this->env->getExtension('CMS')->displayBlock('styles', $context['__placeholder_styles_default_contents']);
        unset($context['__placeholder_styles_default_contents']);        // line 14
        echo "    </head>
    <body>       
        <header>
           <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-2\">
                        <a href=\"#\" id=\"logo\">
                            <img src=\"";
        // line 21
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logo.png");
        echo "\" alt=\"Tork\">
                        </a>
                    </div>
                    <div class=\"col-md-6 offset-md-4\">
                        <nav class=\"pull-right\">
                            <form>
                                <div id=\"search\">
                                    <input type=\"text\" placeholder=\"Search website\">
                                    <button type=\"submit\">
                                        <i class=\"fa fa-search\"></i>
                                    </button>
                                </div>
                            </form>  
                        </nav>
                    </div>                    
                </div>
                <dov class=\"row\">
                    <div class=\"col-md-8 offset-md-3\">
                        <div class=\"lettering\">
                            <h1>Building bulletproof fucking apps</h1>
                            <p>Kickstarter umami Intelligentsia kogi. Try-hard flannel literally, chambray blog crucifix put a bird on it four dollar toast cardigan</p>
                        </div>                        
                    </div>
                </dov>
           </div>            
        </header>
    
        ";
        // line 48
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 49
        echo "        
        <footer>
            <div class=\"container\">
                <div class=\"row\" id=\"contact\">
                    <div class=\"col-md-6\">
                        <h4>Get in touch</h4>
                        <p class=\"small\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>    
                    </div>
                    <div class=\"col-md-6\">
                        <h4>Stay in touch</h4>
                        <form>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"john@mail.com\">
                                <p class=\"small\">We don’t send spam. Actually, who are we kiding, we’ll spam the shit out of you’r inbox</p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"row\" id=\"sitemap\">
                    <div class=\"col-md-2\">
                        <h5>Resources</h5>
                        <ul class=\"list-unstyled\">                            
                            <li><a href=\"#\">Tour</a></li>
                            <li><a href=\"#\">Customers</a></li>
                            <li><a href=\"#\">Pricing and Plans</a></li>
                            <li><a href=\"#\">New Features</a></li>
                            <li><a href=\"#\">Education</a></li>                            
                        </ul>
                    </div>
                    <div class=\"col-md-2\">
                        <h5>Features</h5>
                        <ul class=\"list-unstyled\">                            
                            <li><a href=\"#\">Tour</a></li>
                            <li><a href=\"#\">Customers</a></li>
                            <li><a href=\"#\">Pricing and Plans</a></li>
                            <li><a href=\"#\">New Features</a></li>
                            <li><a href=\"#\">Education</a></li>                            
                        </ul>
                    </div>
                    <div class=\"col-md-2\">
                        <h5>How To’s</h5>
                        <ul class=\"list-unstyled\">                            
                            <li><a href=\"#\">Tour</a></li>
                            <li><a href=\"#\">Customers</a></li>
                            <li><a href=\"#\">Pricing and Plans</a></li>
                            <li><a href=\"#\">New Features</a></li>
                            <li><a href=\"#\">Education</a></li>                            
                        </ul>
                    </div>
                </div>
            </div>     
        </footer>
        
        ";
        // line 102
        $context['__placeholder_script_default_contents'] = null;        ob_start();        // line 103
        echo "            <script src=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/js/jquery.min.js", 1 => "assets/js/bootstrap.min.js"));
        echo "\"></script>
        ";
        $context['__placeholder_script_default_contents'] = ob_get_clean();        // line 102
        echo $this->env->getExtension('CMS')->displayBlock('script', $context['__placeholder_script_default_contents']);
        unset($context['__placeholder_script_default_contents']);        // line 104
        echo "    
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\cms/themes/tork/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 104,  148 => 102,  143 => 103,  142 => 102,  87 => 49,  85 => 48,  55 => 21,  46 => 14,  44 => 8,  40 => 12,  36 => 11,  32 => 10,  29 => 9,  28 => 8,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>    */
/*         <meta charset="utf-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">*/
/*         <meta http-equiv="x-ua-compatible" content="ie=edge">*/
/*         */
/*         {% placeholder styles default %}*/
/*             <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">*/
/*             <link rel="stylesheet" href="{{ 'assets/css/bootstrap.min.css'|theme }}">*/
/*             <link rel="stylesheet" href="{{ 'assets/css/font-awesome.min.css'|theme }}">            */
/*             <link rel="stylesheet" href="{{ 'assets/css/style.css'|theme }}">            */
/*         {% endplaceholder %}*/
/*     </head>*/
/*     <body>       */
/*         <header>*/
/*            <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-md-2">*/
/*                         <a href="#" id="logo">*/
/*                             <img src="{{ 'assets/images/logo.png'|theme }}" alt="Tork">*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="col-md-6 offset-md-4">*/
/*                         <nav class="pull-right">*/
/*                             <form>*/
/*                                 <div id="search">*/
/*                                     <input type="text" placeholder="Search website">*/
/*                                     <button type="submit">*/
/*                                         <i class="fa fa-search"></i>*/
/*                                     </button>*/
/*                                 </div>*/
/*                             </form>  */
/*                         </nav>*/
/*                     </div>                    */
/*                 </div>*/
/*                 <dov class="row">*/
/*                     <div class="col-md-8 offset-md-3">*/
/*                         <div class="lettering">*/
/*                             <h1>Building bulletproof fucking apps</h1>*/
/*                             <p>Kickstarter umami Intelligentsia kogi. Try-hard flannel literally, chambray blog crucifix put a bird on it four dollar toast cardigan</p>*/
/*                         </div>                        */
/*                     </div>*/
/*                 </dov>*/
/*            </div>            */
/*         </header>*/
/*     */
/*         {% page %}*/
/*         */
/*         <footer>*/
/*             <div class="container">*/
/*                 <div class="row" id="contact">*/
/*                     <div class="col-md-6">*/
/*                         <h4>Get in touch</h4>*/
/*                         <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>    */
/*                     </div>*/
/*                     <div class="col-md-6">*/
/*                         <h4>Stay in touch</h4>*/
/*                         <form>*/
/*                             <div class="form-group">*/
/*                                 <input type="text" class="form-control" placeholder="john@mail.com">*/
/*                                 <p class="small">We don’t send spam. Actually, who are we kiding, we’ll spam the shit out of you’r inbox</p>*/
/*                             </div>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="row" id="sitemap">*/
/*                     <div class="col-md-2">*/
/*                         <h5>Resources</h5>*/
/*                         <ul class="list-unstyled">                            */
/*                             <li><a href="#">Tour</a></li>*/
/*                             <li><a href="#">Customers</a></li>*/
/*                             <li><a href="#">Pricing and Plans</a></li>*/
/*                             <li><a href="#">New Features</a></li>*/
/*                             <li><a href="#">Education</a></li>                            */
/*                         </ul>*/
/*                     </div>*/
/*                     <div class="col-md-2">*/
/*                         <h5>Features</h5>*/
/*                         <ul class="list-unstyled">                            */
/*                             <li><a href="#">Tour</a></li>*/
/*                             <li><a href="#">Customers</a></li>*/
/*                             <li><a href="#">Pricing and Plans</a></li>*/
/*                             <li><a href="#">New Features</a></li>*/
/*                             <li><a href="#">Education</a></li>                            */
/*                         </ul>*/
/*                     </div>*/
/*                     <div class="col-md-2">*/
/*                         <h5>How To’s</h5>*/
/*                         <ul class="list-unstyled">                            */
/*                             <li><a href="#">Tour</a></li>*/
/*                             <li><a href="#">Customers</a></li>*/
/*                             <li><a href="#">Pricing and Plans</a></li>*/
/*                             <li><a href="#">New Features</a></li>*/
/*                             <li><a href="#">Education</a></li>                            */
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>     */
/*         </footer>*/
/*         */
/*         {% placeholder script default %}*/
/*             <script src="{{ ['assets/js/jquery.min.js','assets/js/bootstrap.min.js']|theme }}"></script>*/
/*         {% endplaceholder %}    */
/*     </body>*/
/* </html>*/
