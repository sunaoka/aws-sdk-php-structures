<?php

namespace Sunaoka\Aws\Structures\PricingPlanManager\ApprovePaidSubscription;

trait ApprovePaidSubscriptionTrait
{
    /**
     * @param ApprovePaidSubscriptionRequest $args
     * @return ApprovePaidSubscriptionResponse
     */
    public function approvePaidSubscription(ApprovePaidSubscriptionRequest $args)
    {
        $result = parent::approvePaidSubscription($args->toArray());
        return new ApprovePaidSubscriptionResponse($result->toArray());
    }
}
