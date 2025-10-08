<?php

namespace Sunaoka\Aws\Structures\DirectoryService\CreateLogSubscription;

trait CreateLogSubscriptionTrait
{
    /**
     * @param CreateLogSubscriptionRequest $args
     * @return CreateLogSubscriptionResponse
     */
    public function createLogSubscription(CreateLogSubscriptionRequest $args)
    {
        $result = parent::createLogSubscription($args->toArray());
        return new CreateLogSubscriptionResponse($result->toArray());
    }
}
