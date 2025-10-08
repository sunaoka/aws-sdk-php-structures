<?php

namespace Sunaoka\Aws\Structures\SecurityLake\DeleteSubscriber;

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
