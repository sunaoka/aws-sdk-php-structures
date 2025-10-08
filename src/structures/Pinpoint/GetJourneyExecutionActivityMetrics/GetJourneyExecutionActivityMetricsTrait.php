<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourneyExecutionActivityMetrics;

trait GetJourneyExecutionActivityMetricsTrait
{
    /**
     * @param GetJourneyExecutionActivityMetricsRequest $args
     * @return GetJourneyExecutionActivityMetricsResponse
     */
    public function getJourneyExecutionActivityMetrics(GetJourneyExecutionActivityMetricsRequest $args)
    {
        $result = parent::getJourneyExecutionActivityMetrics($args->toArray());
        return new GetJourneyExecutionActivityMetricsResponse($result->toArray());
    }
}
