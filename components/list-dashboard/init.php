<?php 

$links = $app->config['Metabase']['config']['links'];

foreach ($links as $key => &$link) {
    if(isset($link['permission']) && !$link['permission']()) {
        unset($links[$key]);
    }
}

 $this->jsObject['config']['listDashboard'] = [
    'links'=> $links,
 ];
