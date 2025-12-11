<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeProxyRuleGroup;

trait DescribeProxyRuleGroupTrait
{
    /**
     * @param DescribeProxyRuleGroupRequest $args
     * @return DescribeProxyRuleGroupResponse
     */
    public function describeProxyRuleGroup(DescribeProxyRuleGroupRequest $args)
    {
        $result = parent::describeProxyRuleGroup($args->toArray());
        return new DescribeProxyRuleGroupResponse($result->toArray());
    }
}
