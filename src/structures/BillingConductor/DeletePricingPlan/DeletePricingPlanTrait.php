<?php

namespace Sunaoka\Aws\Structures\BillingConductor\DeletePricingPlan;

trait DeletePricingPlanTrait
{
    /**
     * @param DeletePricingPlanRequest $args
     * @return DeletePricingPlanResponse
     */
    public function deletePricingPlan(DeletePricingPlanRequest $args)
    {
        $result = parent::deletePricingPlan($args->toArray());
        return new DeletePricingPlanResponse($result->toArray());
    }
}
