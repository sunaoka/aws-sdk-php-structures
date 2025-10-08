<?php

namespace Sunaoka\Aws\Structures\WafRegional\UpdateRateBasedRule;

trait UpdateRateBasedRuleTrait
{
    /**
     * @param UpdateRateBasedRuleRequest $args
     * @return UpdateRateBasedRuleResponse
     */
    public function updateRateBasedRule(UpdateRateBasedRuleRequest $args)
    {
        $result = parent::updateRateBasedRule($args->toArray());
        return new UpdateRateBasedRuleResponse($result->toArray());
    }
}
