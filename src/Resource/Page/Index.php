<?php

namespace MyVendor\MyRedux\Resource\Page;

use BEAR\Resource\RenderInterface;
use BEAR\Resource\ResourceObject;
use Ray\Di\Di\Inject;
use Ray\Di\Di\Named;

class Index extends ResourceObject
{
    /**
     * @Inject
     * @Named("ssr_hello")
     */
    public function setRenderer(RenderInterface $renderer)
    {
        parent::setRenderer($renderer);
    }

    public function onGet($name = 'BEAR.Sunday')
    {
        $this->body = [
            'title' => 'To ' . $name,
            'hello' => ['message' => 'Hello ' . $name]
        ];

        return $this;
    }
}
