<?php

namespace Sunaoka\Aws\Structures\BillingConductor\DisassociatePricingRules;

trait DisassociatePricingRulesTrait
{
    /**
     * @param DisassociatePricingRulesRequest $args
     * @return DisassociatePricingRulesResponse
     */
    public function disassociatePricingRules(DisassociatePricingRulesRequest $args)
    {
        $result = parent::disassociatePricingRules($args->toArray());
        return new DisassociatePricingRulesResponse($result->toArray());
    }
}
