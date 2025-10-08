<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourneyRunExecutionMetrics;

trait GetJourneyRunExecutionMetricsTrait
{
    /**
     * @param GetJourneyRunExecutionMetricsRequest $args
     * @return GetJourneyRunExecutionMetricsResponse
     */
    public function getJourneyRunExecutionMetrics(GetJourneyRunExecutionMetricsRequest $args)
    {
        $result = parent::getJourneyRunExecutionMetrics($args->toArray());
        return new GetJourneyRunExecutionMetricsResponse($result->toArray());
    }
}
