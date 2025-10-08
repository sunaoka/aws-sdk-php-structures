<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAnomalyDetectors;

trait DescribeAnomalyDetectorsTrait
{
    /**
     * @param DescribeAnomalyDetectorsRequest $args
     * @return DescribeAnomalyDetectorsResponse
     */
    public function describeAnomalyDetectors(DescribeAnomalyDetectorsRequest $args)
    {
        $result = parent::describeAnomalyDetectors($args->toArray());
        return new DescribeAnomalyDetectorsResponse($result->toArray());
    }
}
