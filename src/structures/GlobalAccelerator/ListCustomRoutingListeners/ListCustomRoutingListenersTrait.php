<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCustomRoutingListeners;

trait ListCustomRoutingListenersTrait
{
    /**
     * @param ListCustomRoutingListenersRequest $args
     * @return ListCustomRoutingListenersResponse
     */
    public function listCustomRoutingListeners(ListCustomRoutingListenersRequest $args)
    {
        $result = parent::listCustomRoutingListeners($args->toArray());
        return new ListCustomRoutingListenersResponse($result->toArray());
    }
}
