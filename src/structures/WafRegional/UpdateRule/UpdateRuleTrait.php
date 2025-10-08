<?php

namespace Sunaoka\Aws\Structures\WafRegional\UpdateRule;

trait UpdateRuleTrait
{
    /**
     * @param UpdateRuleRequest $args
     * @return UpdateRuleResponse
     */
    public function updateRule(UpdateRuleRequest $args)
    {
        $result = parent::updateRule($args->toArray());
        return new UpdateRuleResponse($result->toArray());
    }
}
