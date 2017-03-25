<?php

class FakeSingleProject extends SingleProject{
    public function __construct(){
        parent::__construct();
        
        $this->title = 'Title of project '.$this->getId();
        $this->description = file_get_contents('http://loripsum.net/api/2/plaintext');
        $this->thumb = 'https://source.unsplash.com/category/nature/400x300';
        $this->category = 'technology';
        $this->images = array(
            "https://source.unsplash.com/category/nature/400x300",
            "https://source.unsplash.com/category/nature/400x300",
            "https://source.unsplash.com/category/nature/400x300",
            "https://source.unsplash.com/category/nature/400x300"
        );
    }
    
    private function generateImagesArray(){
        
    }
}