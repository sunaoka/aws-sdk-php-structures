<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSecurityGroupRules;

trait DescribeSecurityGroupRulesTrait
{
    /**
     * @param DescribeSecurityGroupRulesRequest $args
     * @return DescribeSecurityGroupRulesResponse
     */
    public function describeSecurityGroupRules(DescribeSecurityGroupRulesRequest $args)
    {
        $result = parent::describeSecurityGroupRules($args->toArray());
        return new DescribeSecurityGroupRulesResponse($result->toArray());
    }
}
