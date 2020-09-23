<?php

//buat function askName
//parameternya Namamu
//askNama("ahmad dani"); //namamu adalah ahmad dani

function askName($name)
{
    $format_name=ucwords(strtolower($name));
    echo "namamu adalah $format_name";
}

askName("ahmad dani");