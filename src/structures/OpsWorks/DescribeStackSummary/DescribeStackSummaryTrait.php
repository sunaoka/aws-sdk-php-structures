<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeStackSummary;

trait DescribeStackSummaryTrait
{
    /**
     * @param DescribeStackSummaryRequest $args
     * @return DescribeStackSummaryResponse
     */
    public function describeStackSummary(DescribeStackSummaryRequest $args)
    {
        $result = parent::describeStackSummary($args->toArray());
        return new DescribeStackSummaryResponse($result->toArray());
    }
}
