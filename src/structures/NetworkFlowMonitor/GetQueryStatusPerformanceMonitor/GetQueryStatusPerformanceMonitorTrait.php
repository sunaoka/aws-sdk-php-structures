<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetQueryStatusPerformanceMonitor;

trait GetQueryStatusPerformanceMonitorTrait
{
    /**
     * @param GetQueryStatusPerformanceMonitorRequest $args
     * @return GetQueryStatusPerformanceMonitorResponse
     */
    public function getQueryStatusPerformanceMonitor(GetQueryStatusPerformanceMonitorRequest $args)
    {
        $result = parent::getQueryStatusPerformanceMonitor($args->toArray());
        return new GetQueryStatusPerformanceMonitorResponse($result->toArray());
    }
}
