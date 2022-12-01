<?php

namespace parser;

use parser\Parser;

class ParcerTagsStructure extends Parser
{

    public function tagCount()
    {

        return array_count_values($this->tags);

    }

}
