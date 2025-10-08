<?php

namespace Sunaoka\Aws\Structures\Waf\ListActivatedRulesInRuleGroup;

trait ListActivatedRulesInRuleGroupTrait
{
    /**
     * @param ListActivatedRulesInRuleGroupRequest $args
     * @return ListActivatedRulesInRuleGroupResponse
     */
    public function listActivatedRulesInRuleGroup(ListActivatedRulesInRuleGroupRequest $args)
    {
        $result = parent::listActivatedRulesInRuleGroup($args->toArray());
        return new ListActivatedRulesInRuleGroupResponse($result->toArray());
    }
}
