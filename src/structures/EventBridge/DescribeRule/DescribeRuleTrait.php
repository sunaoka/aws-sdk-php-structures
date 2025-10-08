<?php

namespace Sunaoka\Aws\Structures\EventBridge\DescribeRule;

trait DescribeRuleTrait
{
    /**
     * @param DescribeRuleRequest $args
     * @return DescribeRuleResponse
     */
    public function describeRule(DescribeRuleRequest $args)
    {
        $result = parent::describeRule($args->toArray());
        return new DescribeRuleResponse($result->toArray());
    }
}
