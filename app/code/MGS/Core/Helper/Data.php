<?php
namespace MGS\Core\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
	
	/*
	 * @string url to get license key
	 */
    public function getCheckLicenseUrl(){
		return 'https://www.magesolution.com/licensekey/index/active';
	}
	
	/*
	 * @string for localhost notice
	 */
	public function getNoticeLocalhostLicenseText(){
		return 'License Key For Localhost';
	}
	
	/*
	 * @string test function
	 */
	public function testCaseForEncription(){
		$string = $this->getNoticeLocalhostLicenseText();
		return str_replace('=','',base64_encode($string));
	}
}
