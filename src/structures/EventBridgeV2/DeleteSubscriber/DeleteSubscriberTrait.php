<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\DeleteSubscriber;

trait DeleteSubscriberTrait
{
    /**
     * @param DeleteSubscriberRequest $args
     * @return DeleteSubscriberResponse
     */
    public function deleteSubscriber(DeleteSubscriberRequest $args)
    {
        $result = parent::deleteSubscriber($args->toArray());
        return new DeleteSubscriberResponse($result->toArray());
    }
}
