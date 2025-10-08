<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\UpdateCustomRoutingListener;

trait UpdateCustomRoutingListenerTrait
{
    /**
     * @param UpdateCustomRoutingListenerRequest $args
     * @return UpdateCustomRoutingListenerResponse
     */
    public function updateCustomRoutingListener(UpdateCustomRoutingListenerRequest $args)
    {
        $result = parent::updateCustomRoutingListener($args->toArray());
        return new UpdateCustomRoutingListenerResponse($result->toArray());
    }
}
