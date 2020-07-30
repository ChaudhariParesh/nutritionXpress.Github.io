<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// front route//
$route['default_controller'] = "front/front_controller/index";
$route['index/(:any)'] = "front/front_controller/index/$1";
$route['registration'] = "front/front_controller/registration";
$route['registration(:any)'] = "front/front_controller/registration/$1";
$route['about'] = "front/front_controller/about";
$route['enquiry'] = "front/front_controller/enquiry";
$route['pc'] = "front/front_controller/pc";
$route['enquiry/(:any)'] = "front/front_controller/enquiry/$1";
$route['upload_info'] = "front/front_controller/upload_info";
$route['search_request'] = "front/front_controller/search_request";
$route['diet_plan'] = "front/front_controller/diet_plan";
$route['gym_installation'] = "front/front_controller/gym_installation";
$route['retail'] = "front/front_controller/retail";
$route['consultancy'] = "front/front_controller/consultancy";
$route['details_request'] = "front/front_controller/details_request";
$route['draft_request'] = "front/front_controller/draft_request";
$route['sports_nutrition'] = "front/front_controller/sports_nutrition";
$route['contact'] = "front/front_controller/contact";
$route['contact/(:any)'] = "front/front_controller/contact/$1";
$route['add_property'] = "front/front_controller/add_property";
$route['add_property/(:any)'] = "front/front_controller/add_property/$1";
$route['add_enquiry'] = "front/front_controller/add_enquiry";
$route['under_construction'] = "front/front_controller/under_construction";





// front route//
$route['login'] = "admin/admin_login/login";
$route['login/(:any)'] = "admin/admin_login/login/$1";
$route['login'] = "admin/admin_login/login"; 
$route['dashboard'] = "admin/admin_controller/dashboard";
$route['check_logout'] = "admin/admin_controller/check_logout"; 
$route['forgot_password'] = "admin/admin_login/forgot_password"; 
$route['reset_password/(:any)'] = "admin/admin_login/reset_password/$1"; 
$route['check_logout'] = "admin/admin_controller/check_logout"; 
$route['update_profile'] = "admin/admin_controller/update_profile";
$route['update_password'] = "admin/admin_controller/update_password";
$route['add_mainCategory'] = "admin/admin_controller/add_mainCategory";
$route['add_mainCategory/(:any)'] = "admin/admin_controller/add_mainCategory/$1";
$route['info_table'] = "admin/admin_controller/info_table";
$route['under_constrution'] = "admin/admin_controller/under_constrution";

$route['list_contact'] = "admin/admin_controller/list_contact"; 
$route['list_contact/(:any)'] = "admin/admin_controller/list_contact/$1"; 
$route['list_enquiry'] = "admin/admin_controller/list_enquiry"; 
$route['list_enquiry/(:any)'] = "admin/admin_controller/list_enquiry/$1"; 

$route['list_registration'] = "admin/admin_controller/list_registration"; 



$route['list'] = "categories/categories_controller/list";







$route['inactive/(:any)']="admin/admin_controller/inactive/$1";
$route['active/(:any)']="admin/admin_controller/active/$1";
$route['delete/(:any)']="admin/admin_controller/delete/$1";

 $route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */