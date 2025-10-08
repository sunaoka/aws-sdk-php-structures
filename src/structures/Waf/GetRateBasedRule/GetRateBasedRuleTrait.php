<?php

namespace Sunaoka\Aws\Structures\Waf\GetRateBasedRule;

trait GetRateBasedRuleTrait
{
    /**
     * @param GetRateBasedRuleRequest $args
     * @return GetRateBasedRuleResponse
     */
    public function getRateBasedRule(GetRateBasedRuleRequest $args)
    {
        $result = parent::getRateBasedRule($args->toArray());
        return new GetRateBasedRuleResponse($result->toArray());
    }
}
