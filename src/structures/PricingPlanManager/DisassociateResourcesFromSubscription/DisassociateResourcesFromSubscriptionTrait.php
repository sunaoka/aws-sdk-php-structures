<?php

namespace Sunaoka\Aws\Structures\PricingPlanManager\DisassociateResourcesFromSubscription;

trait DisassociateResourcesFromSubscriptionTrait
{
    /**
     * @param DisassociateResourcesFromSubscriptionRequest $args
     * @return DisassociateResourcesFromSubscriptionResponse
     */
    public function disassociateResourcesFromSubscription(DisassociateResourcesFromSubscriptionRequest $args)
    {
        $result = parent::disassociateResourcesFromSubscription($args->toArray());
        return new DisassociateResourcesFromSubscriptionResponse($result->toArray());
    }
}
