<?php

namespace Ukk_Azzis\konfig;

// untuk pengaturan aplikasi ukk_azzis
function konfig(){
    return array(
        "database" => array(
            "host" => "localhost",
            "port" => "3306",
            "user" => "root",
            "pass" => "",
            "db" => "ukk_azzis",
            "adaptor" => "mysql",
        )
    );
}
