<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListPricingPlans;

trait ListPricingPlansTrait
{
    /**
     * @param ListPricingPlansRequest $args
     * @return ListPricingPlansResponse
     */
    public function listPricingPlans(ListPricingPlansRequest $args)
    {
        $result = parent::listPricingPlans($args->toArray());
        return new ListPricingPlansResponse($result->toArray());
    }
}
