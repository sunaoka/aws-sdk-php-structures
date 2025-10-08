<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateRuleGroup;

trait UpdateRuleGroupTrait
{
    /**
     * @param UpdateRuleGroupRequest $args
     * @return UpdateRuleGroupResponse
     */
    public function updateRuleGroup(UpdateRuleGroupRequest $args)
    {
        $result = parent::updateRuleGroup($args->toArray());
        return new UpdateRuleGroupResponse($result->toArray());
    }
}
