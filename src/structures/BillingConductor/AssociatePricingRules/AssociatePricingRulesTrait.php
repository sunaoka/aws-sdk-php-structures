<?php

namespace Sunaoka\Aws\Structures\BillingConductor\AssociatePricingRules;

trait AssociatePricingRulesTrait
{
    /**
     * @param AssociatePricingRulesRequest $args
     * @return AssociatePricingRulesResponse
     */
    public function associatePricingRules(AssociatePricingRulesRequest $args)
    {
        $result = parent::associatePricingRules($args->toArray());
        return new AssociatePricingRulesResponse($result->toArray());
    }
}
