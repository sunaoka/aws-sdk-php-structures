<?php

namespace Sunaoka\Aws\Structures\WAFV2\DescribeManagedRuleGroup;

trait DescribeManagedRuleGroupTrait
{
    /**
     * @param DescribeManagedRuleGroupRequest $args
     * @return DescribeManagedRuleGroupResponse
     */
    public function describeManagedRuleGroup(DescribeManagedRuleGroupRequest $args)
    {
        $result = parent::describeManagedRuleGroup($args->toArray());
        return new DescribeManagedRuleGroupResponse($result->toArray());
    }
}
