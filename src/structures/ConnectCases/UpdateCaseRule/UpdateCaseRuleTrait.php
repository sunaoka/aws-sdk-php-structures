<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateCaseRule;

trait UpdateCaseRuleTrait
{
    /**
     * @param UpdateCaseRuleRequest $args
     * @return UpdateCaseRuleResponse
     */
    public function updateCaseRule(UpdateCaseRuleRequest $args)
    {
        $result = parent::updateCaseRule($args->toArray());
        return new UpdateCaseRuleResponse($result->toArray());
    }
}
