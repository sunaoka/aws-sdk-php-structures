<?php

namespace Sunaoka\Aws\Structures\BillingConductor\CreatePricingRule;

trait CreatePricingRuleTrait
{
    /**
     * @param CreatePricingRuleRequest $args
     * @return CreatePricingRuleResponse
     */
    public function createPricingRule(CreatePricingRuleRequest $args)
    {
        $result = parent::createPricingRule($args->toArray());
        return new CreatePricingRuleResponse($result->toArray());
    }
}
