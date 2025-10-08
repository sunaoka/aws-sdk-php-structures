<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourneyRunExecutionActivityMetrics;

trait GetJourneyRunExecutionActivityMetricsTrait
{
    /**
     * @param GetJourneyRunExecutionActivityMetricsRequest $args
     * @return GetJourneyRunExecutionActivityMetricsResponse
     */
    public function getJourneyRunExecutionActivityMetrics(GetJourneyRunExecutionActivityMetricsRequest $args)
    {
        $result = parent::getJourneyRunExecutionActivityMetrics($args->toArray());
        return new GetJourneyRunExecutionActivityMetricsResponse($result->toArray());
    }
}
