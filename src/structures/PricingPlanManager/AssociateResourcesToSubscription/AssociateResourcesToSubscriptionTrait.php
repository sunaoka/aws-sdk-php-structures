<?php

namespace Sunaoka\Aws\Structures\PricingPlanManager\AssociateResourcesToSubscription;

trait AssociateResourcesToSubscriptionTrait
{
    /**
     * @param AssociateResourcesToSubscriptionRequest $args
     * @return AssociateResourcesToSubscriptionResponse
     */
    public function associateResourcesToSubscription(AssociateResourcesToSubscriptionRequest $args)
    {
        $result = parent::associateResourcesToSubscription($args->toArray());
        return new AssociateResourcesToSubscriptionResponse($result->toArray());
    }
}
