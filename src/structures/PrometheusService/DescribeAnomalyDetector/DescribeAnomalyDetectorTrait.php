<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeAnomalyDetector;

trait DescribeAnomalyDetectorTrait
{
    /**
     * @param DescribeAnomalyDetectorRequest $args
     * @return DescribeAnomalyDetectorResponse
     */
    public function describeAnomalyDetector(DescribeAnomalyDetectorRequest $args)
    {
        $result = parent::describeAnomalyDetector($args->toArray());
        return new DescribeAnomalyDetectorResponse($result->toArray());
    }
}
