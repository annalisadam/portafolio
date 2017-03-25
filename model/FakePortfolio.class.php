<?php

class FakePortfolio extends Portfolio{
    public function __construct(){
        
        parent::__construct();
        
        //Create my first project
        $project1 = new FakeSingleProject();
        $project2 = new FakeSingleProject();
        //add both projects to the list of projects of the current instance
        $this->addProject($project1);
        $this->addProject($project2);
        
    }
}