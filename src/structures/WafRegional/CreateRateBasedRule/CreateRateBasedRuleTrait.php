<?php

namespace Sunaoka\Aws\Structures\WafRegional\CreateRateBasedRule;

trait CreateRateBasedRuleTrait
{
    /**
     * @param CreateRateBasedRuleRequest $args
     * @return CreateRateBasedRuleResponse
     */
    public function createRateBasedRule(CreateRateBasedRuleRequest $args)
    {
        $result = parent::createRateBasedRule($args->toArray());
        return new CreateRateBasedRuleResponse($result->toArray());
    }
}
