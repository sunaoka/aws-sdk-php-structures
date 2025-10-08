<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnAuthorizationRules;

trait DescribeClientVpnAuthorizationRulesTrait
{
    /**
     * @param DescribeClientVpnAuthorizationRulesRequest $args
     * @return DescribeClientVpnAuthorizationRulesResponse
     */
    public function describeClientVpnAuthorizationRules(DescribeClientVpnAuthorizationRulesRequest $args)
    {
        $result = parent::describeClientVpnAuthorizationRules($args->toArray());
        return new DescribeClientVpnAuthorizationRulesResponse($result->toArray());
    }
}
