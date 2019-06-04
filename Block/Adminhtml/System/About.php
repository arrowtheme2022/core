<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace MGS\Core\Block\Adminhtml\System;

/**
 * Export CSV button for shipping table rates
 *
 * @author     Magento Core Team <core@magentocommerce.com>
 */
class About extends \Magento\Config\Block\System\Config\Form\Field
{


    /**
     * @return string
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        try {
    		

      		$htmlFeed = curl_init('http://magesolution.com/about/index2.html');
      		
      		if($htmlFeed === false){
    			throw new Exception('Error loading about section HTML.'); }
    		
    		curl_setopt($htmlFeed, CURLOPT_RETURNTRANSFER, true);
    		curl_setopt($htmlFeed, CURLOPT_HEADER, 0);
    		$html = curl_exec($htmlFeed);
    		curl_close($htmlFeed);
    		
    		if($html === false || $html == ''){
    			throw new Exception('Error loading about section HTML or there is no content.'); }

			
    		
    		return $html;
    	
		} catch (Exception $e) {
      	
      		return $e->getMessage();
  		}
    }
}
