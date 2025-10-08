<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListPricingRulesAssociatedToPricingPlan;

trait ListPricingRulesAssociatedToPricingPlanTrait
{
    /**
     * @param ListPricingRulesAssociatedToPricingPlanRequest $args
     * @return ListPricingRulesAssociatedToPricingPlanResponse
     */
    public function listPricingRulesAssociatedToPricingPlan(ListPricingRulesAssociatedToPricingPlanRequest $args)
    {
        $result = parent::listPricingRulesAssociatedToPricingPlan($args->toArray());
        return new ListPricingRulesAssociatedToPricingPlanResponse($result->toArray());
    }
}
