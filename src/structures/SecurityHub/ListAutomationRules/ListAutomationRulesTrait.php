<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListAutomationRules;

trait ListAutomationRulesTrait
{
    /**
     * @param ListAutomationRulesRequest $args
     * @return ListAutomationRulesResponse
     */
    public function listAutomationRules(ListAutomationRulesRequest $args)
    {
        $result = parent::listAutomationRules($args->toArray());
        return new ListAutomationRulesResponse($result->toArray());
    }
}
