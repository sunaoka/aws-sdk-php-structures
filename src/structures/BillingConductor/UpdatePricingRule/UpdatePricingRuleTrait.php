<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdatePricingRule;

trait UpdatePricingRuleTrait
{
    /**
     * @param UpdatePricingRuleRequest $args
     * @return UpdatePricingRuleResponse
     */
    public function updatePricingRule(UpdatePricingRuleRequest $args)
    {
        $result = parent::updatePricingRule($args->toArray());
        return new UpdatePricingRuleResponse($result->toArray());
    }
}
