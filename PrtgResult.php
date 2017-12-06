<?php
namespace App\Models;

class PrtgResult
{
    public $prtg = '';
    
    public function __construct()
    {
        $this->prtg = new \stdClass();
        $this->prtg->result = new \stdClass();
        // $object = (object) array_filter((array) $object);
    }
    
    
    /*
     * Tag: Text
     * Mandatory: -
     * Possible Content: 	Any string; Max. length: 2000 characters
     * Description: Text the sensor returns in the Message field with every scanning interval. There can be one message per sensor, regardless of the number of channels. Default is OK. Note: This element has to be provided outside of the <result> element.
     */
    public function setText($text)
    {
        $this->prtg->text = $text;
        return $this;
    }
    
    /*
     * Tag: Error
     * Mandatory: -
     * Possible Content: 0 (= no) 1 (= yes, set sensor to error; ignore <result> section)
     * Description: If enabled, the sensor will return an error status. This element can be combined with the <Text> element in order to show an error message. Default is 0. Note: This element has to be provided outside of the <result> element. A sensor in this error status cannot return any data in its channels; if used, all channel values in the <result> section will be ignored.
     */
    public function setError($error)
    {
        $this->prtg->error = $error;
        return $this;
    }
    
    public function setResult($result)
    {
        $result = (object) array_filter((array) $result);
        $this->prtg->result[] = $result;
        return $this;
    }
    
    public function setResults($results)
    {
        $this->prtg->result = $results;
        return $this;
    }
}
