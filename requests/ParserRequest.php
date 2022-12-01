<?php

namespace requests;

class ParserRequest
{

    private $params = [];

    public function __construct($params)
    {
        $this->params = $params;
        self::validate();
    }

    public function validate()
    {
        if (filter_var($this->params["url"], FILTER_VALIDATE_URL) !== false) {
            return ["status" => true];
        }
        else {
            return ["status" => false, "message" => "указан не корректный url"];
        }

    }


}

