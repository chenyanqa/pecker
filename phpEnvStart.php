<?php

class envStart {

    public function envBase($conf) {
        require_once(dirname(__FILE__) . '/conf/envConf');
        require_once(dirname(__FILE__) . $conf);
		$env = new env();
		$host = $env->hosts;
		$_conf = new $base_conf();
		echo $_conf->
    }
}
