<?php

class LayoutGenerator
{
    protected $params;
    protected $content;
    protected $layout;

    public function __construct($params, $content, $layout)
    {
        $this->params = $params;
        $this->content = $content;
        $this->layout = file_get_contents('./layouts/' . $layout);
    }

    public function __toString()
    {
        $rendered = str_replace('{title}', $this->params['title'], $this->layout);
        $rendered = str_replace('{description}', $this->params['description'], $rendered);
        $rendered = str_replace('{content}', $this->content, $rendered);

        return $rendered;
    }
}
