<?php
/**
 * Created by simon from Sope.
 */

class ActionClient
{

    /**
     * URL of the ActionHeo.js API
     *
     * @var string
     */
    private $url;

    /**
     * @param $url
     */
    function __construct($url)
    {
        // Add a trailing slash if needed
        $this->url = $url . ((substr($url, -1)=='/')?'':'/');
    }

    /**
     * Call a certain Action
     *
     * @param $action
     * @param null $params
     * @return mixed
     */
    public function call($action, $params=null)
    {
        $context = stream_context_create(array('http'=>array(
            'method' => 'POST',
            'header' => "Content-Type: application/json\r\n",
            'content' => !is_null($params)?json_encode($params):'',
        )));

        return json_decode(file_get_contents($this->url . $action, false, $context));
    }

}