<?php

/**
 * Description of artificial_intelligence
 *
 * @author gofrendi
 */
class artificial_intelligence extends CMS_Controller{
    //put your code here
    public function index(){
        $this->view("artificial_intelligence_index", NULL, "ai_artificial_intelligence_index");
    }
}
