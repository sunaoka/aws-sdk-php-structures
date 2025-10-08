<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListPricingPlansAssociatedWithPricingRule;

trait ListPricingPlansAssociatedWithPricingRuleTrait
{
    /**
     * @param ListPricingPlansAssociatedWithPricingRuleRequest $args
     * @return ListPricingPlansAssociatedWithPricingRuleResponse
     */
    public function listPricingPlansAssociatedWithPricingRule(ListPricingPlansAssociatedWithPricingRuleRequest $args)
    {
        $result = parent::listPricingPlansAssociatedWithPricingRule($args->toArray());
        return new ListPricingPlansAssociatedWithPricingRuleResponse($result->toArray());
    }
}
