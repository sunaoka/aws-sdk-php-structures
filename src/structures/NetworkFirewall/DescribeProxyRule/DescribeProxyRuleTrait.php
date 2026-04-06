<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeProxyRule;

trait DescribeProxyRuleTrait
{
    /**
     * @param DescribeProxyRuleRequest $args
     * @return DescribeProxyRuleResponse
     */
    public function describeProxyRule(DescribeProxyRuleRequest $args)
    {
        $result = parent::describeProxyRule($args->toArray());
        return new DescribeProxyRuleResponse($result->toArray());
    }
}
