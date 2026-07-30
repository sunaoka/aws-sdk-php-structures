<?php

namespace Sunaoka\Aws\Structures\PricingPlanManager\CancelSubscriptionChange;

trait CancelSubscriptionChangeTrait
{
    /**
     * @param CancelSubscriptionChangeRequest $args
     * @return CancelSubscriptionChangeResponse
     */
    public function cancelSubscriptionChange(CancelSubscriptionChangeRequest $args)
    {
        $result = parent::cancelSubscriptionChange($args->toArray());
        return new CancelSubscriptionChangeResponse($result->toArray());
    }
}
