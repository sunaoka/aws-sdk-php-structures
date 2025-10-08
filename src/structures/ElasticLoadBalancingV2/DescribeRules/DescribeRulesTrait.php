<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeRules;

trait DescribeRulesTrait
{
    /**
     * @param DescribeRulesRequest $args
     * @return DescribeRulesResponse
     */
    public function describeRules(DescribeRulesRequest $args)
    {
        $result = parent::describeRules($args->toArray());
        return new DescribeRulesResponse($result->toArray());
    }
}
