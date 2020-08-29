<?php
namespace App\sts\Controllers;
/**
 * Description of Home
 *
 * @author paulo
 */
class Home {
    public function index() {
        $viewHome = new \App\sts\Models\StsHome();
        $viewHome->index();
    }
}
