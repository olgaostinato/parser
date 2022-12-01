<?php

namespace controllers\api;

use requests\ParserRequest;
use parser\ParcerTagsStructure;

class ParserController
{

    public function getCountTags()
    {

        $validate = (new ParserRequest($_GET))->validate();

        if ($validate["status"] != false) {
            $response["status"] = true;
            $response["tags"] = (new ParcerTagsStructure($_GET["url"]))->tagCount();
            echo json_encode($response);
        } else {
            echo json_encode($validate);
        }

    }

}