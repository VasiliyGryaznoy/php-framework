<?php

class Route
{
    private function getFullRequestUrl()
    {
        return str_replace(['index.php', '//'], '', $_SERVER['REQUEST_URI']);
    }
    
    public function work()
    {
        echo $this->getFullRequestUrl();
    }
}
