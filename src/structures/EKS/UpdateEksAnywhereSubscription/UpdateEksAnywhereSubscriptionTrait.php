<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateEksAnywhereSubscription;

trait UpdateEksAnywhereSubscriptionTrait
{
    /**
     * @param UpdateEksAnywhereSubscriptionRequest $args
     * @return UpdateEksAnywhereSubscriptionResponse
     */
    public function updateEksAnywhereSubscription(UpdateEksAnywhereSubscriptionRequest $args)
    {
        $result = parent::updateEksAnywhereSubscription($args->toArray());
        return new UpdateEksAnywhereSubscriptionResponse($result->toArray());
    }
}
