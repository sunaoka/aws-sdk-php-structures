<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdatePricingPlan;

trait UpdatePricingPlanTrait
{
    /**
     * @param UpdatePricingPlanRequest $args
     * @return UpdatePricingPlanResponse
     */
    public function updatePricingPlan(UpdatePricingPlanRequest $args)
    {
        $result = parent::updatePricingPlan($args->toArray());
        return new UpdatePricingPlanResponse($result->toArray());
    }
}
