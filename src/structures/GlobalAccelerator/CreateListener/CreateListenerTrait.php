<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\CreateListener;

trait CreateListenerTrait
{
    /**
     * @param CreateListenerRequest $args
     * @return CreateListenerResponse
     */
    public function createListener(CreateListenerRequest $args)
    {
        $result = parent::createListener($args->toArray());
        return new CreateListenerResponse($result->toArray());
    }
}
