<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetMetrics;

trait GetMetricsTrait
{
    /**
     * @param GetMetricsRequest $args
     * @return GetMetricsResponse
     */
    public function getMetrics(GetMetricsRequest $args)
    {
        $result = parent::getMetrics($args->toArray());
        return new GetMetricsResponse($result->toArray());
    }
}
