<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateEventSubscription;

trait CreateEventSubscriptionTrait
{
    /**
     * @param CreateEventSubscriptionRequest $args
     * @return CreateEventSubscriptionResponse
     */
    public function createEventSubscription(CreateEventSubscriptionRequest $args)
    {
        $result = parent::createEventSubscription($args->toArray());
        return new CreateEventSubscriptionResponse($result->toArray());
    }
}
