<?php

/* base.html.twig */
class __TwigTemplate_02764bab5b08ef3f3b787d9ffe5d923c10951edefb83f67cf833149bebdb2f15 extends Twig_Template
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
<html ng-app=\"dashsoccer\">
  <head>
  <meta charset=\"utf-8\">
  <link href=\"img/logoNew2D.png\" rel=\"shortcut icon\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"description\" content=\"DashSoccer\">
  <meta name=\"keywords\" content=\"bootstrap, admin, dashboard, flat admin template, responsive, dashsoccer\" />

  <!-- ========== Css Files ========== -->
  <link rel=\"stylesheet\" href=\"bower_components/angular-ui-notification/dist/angular-ui-notification.min.css\">

  <link href=\"css/root.css\" rel=\"stylesheet\">
  <link href=\"css/xeditable.min.css\" rel=\"stylesheet\">

  <!-- ========== Angular modules ========== -->
  <script src=\"bower_components/angular/angular.min.js\"></script>
  <script src=\"bower_components/angular-ui-router/release/angular-ui-router.min.js\"></script>
  <script src=\"bower_components/angular-smart-table/dist/smart-table.min.js\"></script>
  <script src=\"bower_components/bootstrap/ui-bootstrap-tpls-1.3.3.min.js\"></script>
  <script src=\"bower_components/angular-block-ui/dist/angular-block-ui.min.js\"></script>
  <script src=\"bower_components/angular-ui-notification/dist/angular-ui-notification.min.js\"></script>
  <script src=\"bower_components/angular-datetime/dist/datetime.js\"></script>
  <script src=\"js/chart/Chart.min.js\"></script>
  <script src=\"js/angular-chart/angular-chart.min.js\"></script>
  <script src=\"js/angular-ngfileupload/ng-file-upload-all.js\"></script>
  <script src=\"js/angular-xeditable/xeditable.min.js\"></script>
  <!-- ========== Routing ========== -->
  <script src=\"bundles/fosjsrouting/js/router.js\"></script>
  <script src=\"js/routing?callback=fos.Router.setData\"></script>
  <script src=\"js/app.js\"></script>

  <!-- ========== Controllers ========== -->
  <script src=\"js/controllers/epocasController.js\"></script>
  <script src=\"js/controllers/parametrosController.js\"></script>
  <script src=\"js/controllers/clubeController.js\"></script>
  <script src=\"js/controllers/atletasController.js\"></script>
  <script src=\"js/controllers/outrasEntidadesController.js\"></script>
  <script src=\"js/controllers/UsersController.js\"></script>
  <script src=\"js/controllers/LoginController.js\"></script>
  <script src=\"js/controllers/dashboardController.js\"></script>

  <!-- ========== Services ========== -->
  <script src=\"js/services/parametrosService.js\"></script>
  <script src=\"js/services/clubeService.js\"></script>
  <script src=\"js/services/atletasService.js\"></script>
  <script src=\"js/services/outrasEntidadesService.js\"></script>
  <script src=\"js/services/UsersService.js\"></script>
  <script src=\"js/services/LoginService.js\"></script>
  <script src=\"js/services/dashboardService.js\"></script>

  <!-- ========== Directives ========== -->
  <script src=\"js/directives/fileUpload.js\"></script>

  </head>

  <body>

 <!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START CONTAINER -->

  <div ui-view></div>

<!-- END CONTAINER -->
 <!-- //////////////////////////////////////////////////////////////////////////// -->

  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html ng-app="dashsoccer">*/
/*   <head>*/
/*   <meta charset="utf-8">*/
/*   <link href="img/logoNew2D.png" rel="shortcut icon">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*   <meta name="description" content="DashSoccer">*/
/*   <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive, dashsoccer" />*/
/* */
/*   <!-- ========== Css Files ========== -->*/
/*   <link rel="stylesheet" href="bower_components/angular-ui-notification/dist/angular-ui-notification.min.css">*/
/* */
/*   <link href="css/root.css" rel="stylesheet">*/
/*   <link href="css/xeditable.min.css" rel="stylesheet">*/
/* */
/*   <!-- ========== Angular modules ========== -->*/
/*   <script src="bower_components/angular/angular.min.js"></script>*/
/*   <script src="bower_components/angular-ui-router/release/angular-ui-router.min.js"></script>*/
/*   <script src="bower_components/angular-smart-table/dist/smart-table.min.js"></script>*/
/*   <script src="bower_components/bootstrap/ui-bootstrap-tpls-1.3.3.min.js"></script>*/
/*   <script src="bower_components/angular-block-ui/dist/angular-block-ui.min.js"></script>*/
/*   <script src="bower_components/angular-ui-notification/dist/angular-ui-notification.min.js"></script>*/
/*   <script src="bower_components/angular-datetime/dist/datetime.js"></script>*/
/*   <script src="js/chart/Chart.min.js"></script>*/
/*   <script src="js/angular-chart/angular-chart.min.js"></script>*/
/*   <script src="js/angular-ngfileupload/ng-file-upload-all.js"></script>*/
/*   <script src="js/angular-xeditable/xeditable.min.js"></script>*/
/*   <!-- ========== Routing ========== -->*/
/*   <script src="bundles/fosjsrouting/js/router.js"></script>*/
/*   <script src="js/routing?callback=fos.Router.setData"></script>*/
/*   <script src="js/app.js"></script>*/
/* */
/*   <!-- ========== Controllers ========== -->*/
/*   <script src="js/controllers/epocasController.js"></script>*/
/*   <script src="js/controllers/parametrosController.js"></script>*/
/*   <script src="js/controllers/clubeController.js"></script>*/
/*   <script src="js/controllers/atletasController.js"></script>*/
/*   <script src="js/controllers/outrasEntidadesController.js"></script>*/
/*   <script src="js/controllers/UsersController.js"></script>*/
/*   <script src="js/controllers/LoginController.js"></script>*/
/*   <script src="js/controllers/dashboardController.js"></script>*/
/* */
/*   <!-- ========== Services ========== -->*/
/*   <script src="js/services/parametrosService.js"></script>*/
/*   <script src="js/services/clubeService.js"></script>*/
/*   <script src="js/services/atletasService.js"></script>*/
/*   <script src="js/services/outrasEntidadesService.js"></script>*/
/*   <script src="js/services/UsersService.js"></script>*/
/*   <script src="js/services/LoginService.js"></script>*/
/*   <script src="js/services/dashboardService.js"></script>*/
/* */
/*   <!-- ========== Directives ========== -->*/
/*   <script src="js/directives/fileUpload.js"></script>*/
/* */
/*   </head>*/
/* */
/*   <body>*/
/* */
/*  <!-- //////////////////////////////////////////////////////////////////////////// -->*/
/* <!-- START CONTAINER -->*/
/* */
/*   <div ui-view></div>*/
/* */
/* <!-- END CONTAINER -->*/
/*  <!-- //////////////////////////////////////////////////////////////////////////// -->*/
/* */
/*   </body>*/
/* </html>*/
/* */
