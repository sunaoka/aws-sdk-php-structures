<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchUpdateAutomationRules;

trait BatchUpdateAutomationRulesTrait
{
    /**
     * @param BatchUpdateAutomationRulesRequest $args
     * @return BatchUpdateAutomationRulesResponse
     */
    public function batchUpdateAutomationRules(BatchUpdateAutomationRulesRequest $args)
    {
        $result = parent::batchUpdateAutomationRules($args->toArray());
        return new BatchUpdateAutomationRulesResponse($result->toArray());
    }
}
