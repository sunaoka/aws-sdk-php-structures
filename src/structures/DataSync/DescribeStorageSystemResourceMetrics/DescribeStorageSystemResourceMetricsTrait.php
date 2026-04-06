<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResourceMetrics;

trait DescribeStorageSystemResourceMetricsTrait
{
    /**
     * @param DescribeStorageSystemResourceMetricsRequest $args
     * @return DescribeStorageSystemResourceMetricsResponse
     */
    public function describeStorageSystemResourceMetrics(DescribeStorageSystemResourceMetricsRequest $args)
    {
        $result = parent::describeStorageSystemResourceMetrics($args->toArray());
        return new DescribeStorageSystemResourceMetricsResponse($result->toArray());
    }
}
