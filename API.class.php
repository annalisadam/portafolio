<?php

require_once('model/Portfolio.class.php');
require_once('model/FakePortfolio.class.php');
/**
 * This class will handle all the logic for our API
 */
class API
{
    private $data;
    private $typeOfRequest;

    function fakeDatabaseValues()
    {
        if($this->typeOfRequest=='all')
        {
            $portfolio = new FakePortfolio();
            $this->data = $portfolio;
        }
        else
        {
            $singleProject = new FakeSingleProject();
            $this->data = $singleProject;
        }
    }
    
    function returnRequest($responseForm)
    {
        $array = get_object_vars($this->data);
        echo json_encode($array);
    }
    
    function identifyRequest($request)
    {
        if($request['id']!==null)
        {
            //return the project
            $this->typeOfRequest = "single";
        }
        else
        {
             $this->typeOfRequest = "all";
            //return the list of projects
        }
    }
    
     function performRequest()
     {
        $this->fakeDatabaseValues($this->typeOfRequest);
     }
}