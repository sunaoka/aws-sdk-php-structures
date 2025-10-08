<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourneyExecutionMetrics;

trait GetJourneyExecutionMetricsTrait
{
    /**
     * @param GetJourneyExecutionMetricsRequest $args
     * @return GetJourneyExecutionMetricsResponse
     */
    public function getJourneyExecutionMetrics(GetJourneyExecutionMetricsRequest $args)
    {
        $result = parent::getJourneyExecutionMetrics($args->toArray());
        return new GetJourneyExecutionMetricsResponse($result->toArray());
    }
}
