<?php

namespace Sunaoka\Aws\Structures\SecurityLake\GetSubscriber;

trait GetSubscriberTrait
{
    /**
     * @param GetSubscriberRequest $args
     * @return GetSubscriberResponse
     */
    public function getSubscriber(GetSubscriberRequest $args)
    {
        $result = parent::getSubscriber($args->toArray());
        return new GetSubscriberResponse($result->toArray());
    }
}
