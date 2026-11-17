<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetQueryResultsPerformanceMonitor;

trait GetQueryResultsPerformanceMonitorTrait
{
    /**
     * @param GetQueryResultsPerformanceMonitorRequest $args
     * @return GetQueryResultsPerformanceMonitorResponse
     */
    public function getQueryResultsPerformanceMonitor(GetQueryResultsPerformanceMonitorRequest $args)
    {
        $result = parent::getQueryResultsPerformanceMonitor($args->toArray());
        return new GetQueryResultsPerformanceMonitorResponse($result->toArray());
    }
}
