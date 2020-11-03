<?php

function run(){
    $viewData = array(
        "cuenta"=>"0701199800298",
        "nombre"=>"Leandro Sagastume",
        "correo"=>"josue_sagastume10@hotmail.com"
    );
    $proyectos = array(
        array("id"=>"1", "name"=>"Negocios CMS"),
        array("id"=>"2", "name"=>"Negocios ERP"),
        array("id"=>"3", "name"=>"Negocios RRHH"),
        array("id"=>"4", "name"=>"Bachiller Tecnico Profesional en Informatica"),
        array("id"=>"5", "name"=>"Ultimo año Ingenieria en Ciencias de la Computación")
    );
    $viewData["proyectos"] = $proyectos;
    renderizar("about", $viewData);
}

run();

?>