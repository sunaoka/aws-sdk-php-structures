<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListPricingRules;

trait ListPricingRulesTrait
{
    /**
     * @param ListPricingRulesRequest $args
     * @return ListPricingRulesResponse
     */
    public function listPricingRules(ListPricingRulesRequest $args)
    {
        $result = parent::listPricingRules($args->toArray());
        return new ListPricingRulesResponse($result->toArray());
    }
}
