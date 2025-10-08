<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeInsightRules;

trait DescribeInsightRulesTrait
{
    /**
     * @param DescribeInsightRulesRequest $args
     * @return DescribeInsightRulesResponse
     */
    public function describeInsightRules(DescribeInsightRulesRequest $args)
    {
        $result = parent::describeInsightRules($args->toArray());
        return new DescribeInsightRulesResponse($result->toArray());
    }
}
