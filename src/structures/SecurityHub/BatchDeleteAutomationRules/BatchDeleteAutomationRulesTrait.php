<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchDeleteAutomationRules;

trait BatchDeleteAutomationRulesTrait
{
    /**
     * @param BatchDeleteAutomationRulesRequest $args
     * @return BatchDeleteAutomationRulesResponse
     */
    public function batchDeleteAutomationRules(BatchDeleteAutomationRulesRequest $args)
    {
        $result = parent::batchDeleteAutomationRules($args->toArray());
        return new BatchDeleteAutomationRulesResponse($result->toArray());
    }
}
