<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
| example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
| https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
| $route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
| $route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
| $route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples: my-controller/index -> my_controller/index
|   my-controller/my-method -> my_controller/my_method
*/
$route['default_controller'] = 'welcome'; //welcome
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

/*Rutas Page*/
$route['blog'] = 'blog_control/index';
$route['blog/(:num)'] = 'blog_control/index/$1';
$route['blog/(:num)/(:num)'] = 'blog_control/index/$1/$2';
$route['blog/(:num)/(:num)/(:num)'] = 'blog_control/index/$1/$2/$3';
$route[ 'blog/(:num)/(:num)/(:num)/(:any)'] = 'blog_control/ver/$1/$2/$3/$4';
$route['nosotros']='nosotros_control';
$route['templates']='templates_control';

$route['panel']='panel/Admin/index';

/* Rutas Rest*/
// $route['api_rest/Rest_example']['get'] = 'api_rest/Rest_example/index';
// $route['api_rest/Rest_example/(:num)']['get'] = 'api_rest/Rest_example/find/$1';
// $route['api_rest/Rest_example']['post'] = 'api_rest/Rest_example/index';
// $route['api_rest/Rest_example/(:num)']['put'] = 'api_rest/Rest_example/index/$1';
// $route['api_rest/Rest_example/(:num)']['delete'] = 'api_rest/Rest_example/index/$1';

/*
| -------------------------------------------------------------------------
| Sample REST API Routes
| -------------------------------------------------------------------------
*/
$route['api/example/users/(:num)'] = 'api/example/users/id/$1'; // Example 4
$route['api/example/users/(:num)(\.)([a-zA-Z0-9_-]+)(.*)'] = 'api/example/users/id/$1/format/$3$4'; // Example 8
