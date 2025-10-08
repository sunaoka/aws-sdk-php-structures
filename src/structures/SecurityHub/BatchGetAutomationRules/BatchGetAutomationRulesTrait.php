<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchGetAutomationRules;

trait BatchGetAutomationRulesTrait
{
    /**
     * @param BatchGetAutomationRulesRequest $args
     * @return BatchGetAutomationRulesResponse
     */
    public function batchGetAutomationRules(BatchGetAutomationRulesRequest $args)
    {
        $result = parent::batchGetAutomationRules($args->toArray());
        return new BatchGetAutomationRulesResponse($result->toArray());
    }
}
