<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeRuleGroup;

trait DescribeRuleGroupTrait
{
    /**
     * @param DescribeRuleGroupRequest $args
     * @return DescribeRuleGroupResponse
     */
    public function describeRuleGroup(DescribeRuleGroupRequest $args)
    {
        $result = parent::describeRuleGroup($args->toArray());
        return new DescribeRuleGroupResponse($result->toArray());
    }
}
