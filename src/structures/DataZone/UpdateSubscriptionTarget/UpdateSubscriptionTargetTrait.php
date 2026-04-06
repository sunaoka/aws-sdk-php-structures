<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateSubscriptionTarget;

trait UpdateSubscriptionTargetTrait
{
    /**
     * @param UpdateSubscriptionTargetRequest $args
     * @return UpdateSubscriptionTargetResponse
     */
    public function updateSubscriptionTarget(UpdateSubscriptionTargetRequest $args)
    {
        $result = parent::updateSubscriptionTarget($args->toArray());
        return new UpdateSubscriptionTargetResponse($result->toArray());
    }
}
