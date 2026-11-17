<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetPerformanceMonitor;

trait GetPerformanceMonitorTrait
{
    /**
     * @param GetPerformanceMonitorRequest $args
     * @return GetPerformanceMonitorResponse
     */
    public function getPerformanceMonitor(GetPerformanceMonitorRequest $args)
    {
        $result = parent::getPerformanceMonitor($args->toArray());
        return new GetPerformanceMonitorResponse($result->toArray());
    }
}
