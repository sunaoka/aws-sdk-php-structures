<?php

namespace Sunaoka\Aws\Structures\BillingConductor\CreatePricingPlan;

trait CreatePricingPlanTrait
{
    /**
     * @param CreatePricingPlanRequest $args
     * @return CreatePricingPlanResponse
     */
    public function createPricingPlan(CreatePricingPlanRequest $args)
    {
        $result = parent::createPricingPlan($args->toArray());
        return new CreatePricingPlanResponse($result->toArray());
    }
}
