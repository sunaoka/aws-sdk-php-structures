<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetDataQualityMetrics;

trait GetDataQualityMetricsTrait
{
    /**
     * @param GetDataQualityMetricsRequest $args
     * @return GetDataQualityMetricsResponse
     */
    public function getDataQualityMetrics(GetDataQualityMetricsRequest $args)
    {
        $result = parent::getDataQualityMetrics($args->toArray());
        return new GetDataQualityMetricsResponse($result->toArray());
    }
}
