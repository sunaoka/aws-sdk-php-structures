<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeComputationModelExecutionSummary;

trait DescribeComputationModelExecutionSummaryTrait
{
    /**
     * @param DescribeComputationModelExecutionSummaryRequest $args
     * @return DescribeComputationModelExecutionSummaryResponse
     */
    public function describeComputationModelExecutionSummary(DescribeComputationModelExecutionSummaryRequest $args)
    {
        $result = parent::describeComputationModelExecutionSummary($args->toArray());
        return new DescribeComputationModelExecutionSummaryResponse($result->toArray());
    }
}
