<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']        = 'Home';

$route['userDashboard']	            = "Users/index";
$route['addDocuments']	            = "Users/addDocuments";
$route['viewDocuments']	            = "Users/viewDocuments";
$route['Add-Work-Document']     	= "Users/AddWorkDocument";
$route['userForm']	                = "Users/userForm";
$route['statusDetails']         	= "Users/statusDetails";
$route['updateChallanRecipt']       = "Users/updateChallanRecipt";
$route['certificate']           	= "Users/certificate";
$route['editDocuments']	            = "Users/editDocuments";

$route['engineerDashboard']     	= "Engineer/index";
$route['engineerUserForm']      	= "Engineer/userForm";

$route['accountantDashboard']       = "Accountant/index";
$route['accountantUserForm']        = "Accountant/userForm";

$route['inchargeDashboard']         = "Incharge/index";
$route['inchargeUserForm']          = "Incharge/userForm";
$route['inchargeSocietyForm']       = "Incharge/inchargeSocietyForm";
$route['generateChallan']           = "Incharge/generateChallan";
$route['generateCertificateRegistration'] = "Incharge/generateCertificateRegistration";
$route['viewGenerateCertificate']   = "Incharge/viewGenerateCertificate";
$route['updateOldUserStatus']       = "Incharge/updateOldUserStatus";
$route['societyDashboard']          = "Society/index";
$route['addSocietyDocuments']       = "Society/addSocietyDocuments";
$route['viewSocietyDocuments']      = "Society/viewSocietyDocuments";
$route['editSocietyDocuments']      = "Society/editSocietyDocuments";
$route['societyInterestedWork']     = "Society/societyInterestedWork";
$route['SocietyProfile']            = "Society/SocietyProfile";
$route['statusSocietyDetails']      = "Society/statusSocietyDetails";

$route['updateStatus']               = "Incharge/updateSocietyFormStatus";
$route['updateOldUserSocietyStatus'] = "Incharge/updateOldUserSocietyStatus";
$route['TransferWork']              = "Transferwork/index";

$route['List-of-Work-for-Lottery']  = "Home/WorkList";
$route['editWorkDocuments']	        = "Users/editWorkDocuments";
$route['DocumentList']              = "Home/DocumentList";
$route['interestedWork']            = "Users/interestedWork";
$route['interestedWorkProcess']     = "Users/interestedWorkProcess";
$route['Old-User-Registration-for-Lottery'] = "Home/oldUserForm";

$route['viewOldUsersForm']          = "Incharge/viewOldUsersForm";
$route['viewOldUsersSocietyForm']   = "Incharge/viewOldUsersSocietyForm";
$route['viewSocietyForm']           = "Backend/viewSocietyForm";
$route['viewApplications']          = "Backend/viewApplications";

$route['updateLotteryWork']         = "Addlottery/updateLotteryWork";
$route['Login']                     = "Home/Login";
$route['Forgotpassword']            = "Home/Forgotpassword";
$route['ForgotProccess']            = "Home/ForgotProccess";
$route['Forgot-Password']           = "Home/ForgotPasswordPage";
$route['viewSocietyFormStatus']     = "Society/viewSocietyFormStatus";

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
