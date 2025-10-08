<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRuleGroup;

trait GetRuleGroupTrait
{
    /**
     * @param GetRuleGroupRequest $args
     * @return GetRuleGroupResponse
     */
    public function getRuleGroup(GetRuleGroupRequest $args)
    {
        $result = parent::getRuleGroup($args->toArray());
        return new GetRuleGroupResponse($result->toArray());
    }
}
