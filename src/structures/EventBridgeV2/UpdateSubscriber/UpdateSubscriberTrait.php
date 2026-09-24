<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\UpdateSubscriber;

trait UpdateSubscriberTrait
{
    /**
     * @param UpdateSubscriberRequest $args
     * @return UpdateSubscriberResponse
     */
    public function updateSubscriber(UpdateSubscriberRequest $args)
    {
        $result = parent::updateSubscriber($args->toArray());
        return new UpdateSubscriberResponse($result->toArray());
    }
}
