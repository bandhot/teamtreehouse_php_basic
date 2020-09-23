<?php

$tanya=readline("pilih mana(yes/no) ?");

if($tanya=="yes") //jika memilih yes
{
    echo "kamu pilih yes";
}elseif($tanya=="no") //jika memilih noo
{
    echo "kamu pilih no";
}
elseif($tanya=="maybe") //jika memilih maybe
{
    echo "kamu memiih maybe";
}
else //jika tidak memilih yes/noo/maybe (tidak dalam pilihan yang tersedia)
{
    echo "kamu tidak memilih pilihan yan tersedia !!!";
}

echo PHP_EOL;

$menu=readline("pilih angka 1-3 ?");

//pilih input yang akan diuji
switch($menu)
{
    case 1:                         //jika user menginput angka 1
        echo "anda memilih angka 1";
    break;
    case 2:                         //jika user menginput angka 2
        echo "anda memilih angka 2";
    break;
    case 3:                         //jika user menginput angka 3
        echo "anda memilih angka 3";
    break;
    default;                         //jika user tidak menginput angka yang terssedia
    echo "anda memilih pilihan yang tersedia";
}