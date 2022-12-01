<?php

namespace parser;


class Parser
{
    private $url;
    public $tags = [];

    public function __construct(string $url)
    {

        $this->url = $url;
        self::parse();

    }

    private function parse()
    {

        if (($file = @file_get_contents($this->url)) !== false) {
            preg_match_all('/<[a-z]{1,10} |>$/', $file, $matches);
            foreach ($matches[0] as $key => $tag) {
                $this->tags[] = substr($tag, 1, -1);
            }
        } else {
            return false;
        }

    }

}