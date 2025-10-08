<?php

namespace Sunaoka\Aws\Structures\PI\GetResourceMetrics;

trait GetResourceMetricsTrait
{
    /**
     * @param GetResourceMetricsRequest $args
     * @return GetResourceMetricsResponse
     */
    public function getResourceMetrics(GetResourceMetricsRequest $args)
    {
        $result = parent::getResourceMetrics($args->toArray());
        return new GetResourceMetricsResponse($result->toArray());
    }
}
