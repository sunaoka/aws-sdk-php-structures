<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateSubscriptionTarget;

trait CreateSubscriptionTargetTrait
{
    /**
     * @param CreateSubscriptionTargetRequest $args
     * @return CreateSubscriptionTargetResponse
     */
    public function createSubscriptionTarget(CreateSubscriptionTargetRequest $args)
    {
        $result = parent::createSubscriptionTarget($args->toArray());
        return new CreateSubscriptionTargetResponse($result->toArray());
    }
}
