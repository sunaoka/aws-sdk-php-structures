<?php

namespace Sunaoka\Aws\Structures\WAFV2\DeleteRuleGroup;

trait DeleteRuleGroupTrait
{
    /**
     * @param DeleteRuleGroupRequest $args
     * @return DeleteRuleGroupResponse
     */
    public function deleteRuleGroup(DeleteRuleGroupRequest $args)
    {
        $result = parent::deleteRuleGroup($args->toArray());
        return new DeleteRuleGroupResponse($result->toArray());
    }
}
