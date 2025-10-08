<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeInsight;

trait DescribeInsightTrait
{
    /**
     * @param DescribeInsightRequest $args
     * @return DescribeInsightResponse
     */
    public function describeInsight(DescribeInsightRequest $args)
    {
        $result = parent::describeInsight($args->toArray());
        return new DescribeInsightResponse($result->toArray());
    }
}
