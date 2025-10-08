<?php

namespace Sunaoka\Aws\Structures\Waf\DeleteRateBasedRule;

trait DeleteRateBasedRuleTrait
{
    /**
     * @param DeleteRateBasedRuleRequest $args
     * @return DeleteRateBasedRuleResponse
     */
    public function deleteRateBasedRule(DeleteRateBasedRuleRequest $args)
    {
        $result = parent::deleteRateBasedRule($args->toArray());
        return new DeleteRateBasedRuleResponse($result->toArray());
    }
}
