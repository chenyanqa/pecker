<?php
require_once(dirname(__FILE__) . '/conf/envConf');
$env = new env();
echo $env->hosts;
