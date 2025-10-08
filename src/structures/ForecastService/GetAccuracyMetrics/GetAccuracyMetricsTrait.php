<?php

namespace Sunaoka\Aws\Structures\ForecastService\GetAccuracyMetrics;

trait GetAccuracyMetricsTrait
{
    /**
     * @param GetAccuracyMetricsRequest $args
     * @return GetAccuracyMetricsResponse
     */
    public function getAccuracyMetrics(GetAccuracyMetricsRequest $args)
    {
        $result = parent::getAccuracyMetrics($args->toArray());
        return new GetAccuracyMetricsResponse($result->toArray());
    }
}
