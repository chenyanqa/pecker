<?php
class ShouQ_banner_square_Test extends PHPUnit_Framework_TestCase
{
    public function testTypeOfResponse()
    {
    	require_once(dirname(__FILE__) . '/conf/envConf');
        require_once(dirname(__FILE__) . '/caseConf/ShouQ_banner_square_conf.php');
		$env = new env();
		$host = $env->hosts;
		$_conf = new base_conf();
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $host . "/shop/shop_follow?shop_id=1003802");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_COOKIE, $_conf->cookie);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$output = curl_exec($ch);
		curl_close($ch);
		$output = json_decode($output);
		$res = $output->code;
		$this->assertEquals(0, $res);
    }
	
}
