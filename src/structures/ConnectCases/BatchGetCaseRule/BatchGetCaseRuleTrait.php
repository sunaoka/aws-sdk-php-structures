<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchGetCaseRule;

trait BatchGetCaseRuleTrait
{
    /**
     * @param BatchGetCaseRuleRequest $args
     * @return BatchGetCaseRuleResponse
     */
    public function batchGetCaseRule(BatchGetCaseRuleRequest $args)
    {
        $result = parent::batchGetCaseRule($args->toArray());
        return new BatchGetCaseRuleResponse($result->toArray());
    }
}
