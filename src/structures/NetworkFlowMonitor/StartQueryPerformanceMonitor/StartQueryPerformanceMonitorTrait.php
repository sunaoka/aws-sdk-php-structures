<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\StartQueryPerformanceMonitor;

trait StartQueryPerformanceMonitorTrait
{
    /**
     * @param StartQueryPerformanceMonitorRequest $args
     * @return StartQueryPerformanceMonitorResponse
     */
    public function startQueryPerformanceMonitor(StartQueryPerformanceMonitorRequest $args)
    {
        $result = parent::startQueryPerformanceMonitor($args->toArray());
        return new StartQueryPerformanceMonitorResponse($result->toArray());
    }
}
