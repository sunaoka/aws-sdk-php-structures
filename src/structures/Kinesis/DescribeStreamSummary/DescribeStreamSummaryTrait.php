<?php

namespace Sunaoka\Aws\Structures\Kinesis\DescribeStreamSummary;

trait DescribeStreamSummaryTrait
{
    /**
     * @param DescribeStreamSummaryRequest $args
     * @return DescribeStreamSummaryResponse
     */
    public function describeStreamSummary(DescribeStreamSummaryRequest $args)
    {
        $result = parent::describeStreamSummary($args->toArray());
        return new DescribeStreamSummaryResponse($result->toArray());
    }
}
