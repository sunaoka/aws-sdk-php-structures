<?php

namespace Sunaoka\Aws\Structures\DataZone\GetSubscriptionTarget;

trait GetSubscriptionTargetTrait
{
    /**
     * @param GetSubscriptionTargetRequest $args
     * @return GetSubscriptionTargetResponse
     */
    public function getSubscriptionTarget(GetSubscriptionTargetRequest $args)
    {
        $result = parent::getSubscriptionTarget($args->toArray());
        return new GetSubscriptionTargetResponse($result->toArray());
    }
}
