<?php


class replaceSubstring
{
   public function replaceSubstring($id, $place_holder, $template_mapper, $file_mapper, $template)
    {    	
    	if(!isset($id))
    		return;
 		
    	//$template_mapper = new Application_Model_TemplateMapper();
        //$file_mapper  = new Application_Model_TemplateFileMapper();

        //$template = new Application_Model_Template();
     //   $template_mapper->find($id, $template);
//        $files = $file_mapper->getTemplateData($id);
//
//        $type = $template->getType();
//        $content_array = array();
//        if($type == "docx")
//        {
//        	$mailMerge = new Zend_Service_LiveDocx_MailMerge();
// 
//			$mailMerge->setUsername('ShirleyTemplate')
//			          ->setPassword('ShirleyTemplateSWT11 ');
//			
//			$filename = BASE_PATH.'/public/files/License.docx';
//			$mailMerge->setLocalTemplate($filename);
//			 
//			$mailMerge->assign('software', 'Magic Graphical Compression Suite v1.9')
//	          ->assign('licensee', 'Henry Doener-Meyer')
//	          ->assign('company',  'Co-Operation')
//	          ->assign('date',     'January 11, 2010')
//	          ->assign('time',     'January 11, 2010')
//	          ->assign('city',     'Berlin')
//	          ->assign('country',  'Germany');
//			 
//			$mailMerge->createDocument();
//			 
//			$document = $mailMerge->retrieveDocument('pdf');
//			
//			$filename = BASE_PATH . '/public/files/document.pdf';
//			 
//			file_put_contents($filename, $document);
//        }
//        else 
//        {
//	        foreach ($files as $file)
//	        {
//	        	$text = $file->getData();
//	        	$i = 0;
//	        	
//	        	foreach ($replace as $placeholder=>$value)
//		        {
//		        	$text = str_replace($placeholder, $value, $text); 
//		        	$i++;
//		        }
//		        
//		        $content_array[$file->getName()] = $text;
//	        }
//        }
//        $identity = Zend_Auth::getInstance()->getIdentity();
//        $zip_name = "$identity$id.zip";
//        if(!$d = dir(BASE_PATH."/public/files/$identity"))
//        	mkdir(BASE_PATH ."/public/files/$identity" , 0777);
//        	
//       	$_SESSION['DownloadFileName'] = $zip_name;
//       	
//	    $zip_file = new zipFiles("$identity/$zip_name", $content_array);
        
        //$this->_helper->redirector('');
    	/*$replaceT = new replaceTemplate();
    	$place_holder = array("#vkSUBJECT", "#vkRECPCOMPANY", "#vkRECPNAME", "#vkRECPSTREET", "#vkRECPPLY", "#vkRECPCITY", "#vkGREETING");
    	$replace_holder = array("SomeSubject", "SomeCompany", "SomeRecpName", "SomeRecpStreet", "SomeREcpply", "SomeRecpCity", "SomeGreeting");*/
    }

}
    