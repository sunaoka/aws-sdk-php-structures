<?php

namespace Sunaoka\Aws\Structures\BillingConductor\DeletePricingRule;

trait DeletePricingRuleTrait
{
    /**
     * @param DeletePricingRuleRequest $args
     * @return DeletePricingRuleResponse
     */
    public function deletePricingRule(DeletePricingRuleRequest $args)
    {
        $result = parent::deletePricingRule($args->toArray());
        return new DeletePricingRuleResponse($result->toArray());
    }
}
