<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeAnomalyDetectionExecutions;

trait DescribeAnomalyDetectionExecutionsTrait
{
    /**
     * @param DescribeAnomalyDetectionExecutionsRequest $args
     * @return DescribeAnomalyDetectionExecutionsResponse
     */
    public function describeAnomalyDetectionExecutions(DescribeAnomalyDetectionExecutionsRequest $args)
    {
        $result = parent::describeAnomalyDetectionExecutions($args->toArray());
        return new DescribeAnomalyDetectionExecutionsResponse($result->toArray());
    }
}
