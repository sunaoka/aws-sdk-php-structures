<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeRuleGroupSummary;

trait DescribeRuleGroupSummaryTrait
{
    /**
     * @param DescribeRuleGroupSummaryRequest $args
     * @return DescribeRuleGroupSummaryResponse
     */
    public function describeRuleGroupSummary(DescribeRuleGroupSummaryRequest $args)
    {
        $result = parent::describeRuleGroupSummary($args->toArray());
        return new DescribeRuleGroupSummaryResponse($result->toArray());
    }
}
