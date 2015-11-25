<?php

header("Content-type: text/html; charset=utf-8");
//记录运行时间
$GLOBALS['_beginTime'] = microtime("get_as_float=TRUE");
        const ZHU_VERSION = '1.0.0';

class path {

    function mk($path) {
        if (true) {
            if (!file_exists( $path)) {
                mkdir($path);
			    mkdir($path."/com");
				mkdir($path."/conf");
				mkdir($path."/model");
				
            } else {
                echo '需创建的文件夹test已经存在';
            }
        }
        echo "fasd";
    }

}
