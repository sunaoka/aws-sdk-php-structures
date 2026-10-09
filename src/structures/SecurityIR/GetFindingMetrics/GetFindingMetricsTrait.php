<?php

namespace Sunaoka\Aws\Structures\SecurityIR\GetFindingMetrics;

trait GetFindingMetricsTrait
{
    /**
     * @param GetFindingMetricsRequest $args
     * @return GetFindingMetricsResponse
     */
    public function getFindingMetrics(GetFindingMetricsRequest $args)
    {
        $result = parent::getFindingMetrics($args->toArray());
        return new GetFindingMetricsResponse($result->toArray());
    }
}
