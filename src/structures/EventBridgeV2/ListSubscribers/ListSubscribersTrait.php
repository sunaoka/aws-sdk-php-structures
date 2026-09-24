<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\ListSubscribers;

trait ListSubscribersTrait
{
    /**
     * @param ListSubscribersRequest $args
     * @return ListSubscribersResponse
     */
    public function listSubscribers(ListSubscribersRequest $args)
    {
        $result = parent::listSubscribers($args->toArray());
        return new ListSubscribersResponse($result->toArray());
    }
}
