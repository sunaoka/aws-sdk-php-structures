<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\CreateCustomRoutingListener;

trait CreateCustomRoutingListenerTrait
{
    /**
     * @param CreateCustomRoutingListenerRequest $args
     * @return CreateCustomRoutingListenerResponse
     */
    public function createCustomRoutingListener(CreateCustomRoutingListenerRequest $args)
    {
        $result = parent::createCustomRoutingListener($args->toArray());
        return new CreateCustomRoutingListenerResponse($result->toArray());
    }
}
