<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\StopQueryPerformanceMonitor;

trait StopQueryPerformanceMonitorTrait
{
    /**
     * @param StopQueryPerformanceMonitorRequest $args
     * @return StopQueryPerformanceMonitorResponse
     */
    public function stopQueryPerformanceMonitor(StopQueryPerformanceMonitorRequest $args)
    {
        $result = parent::stopQueryPerformanceMonitor($args->toArray());
        return new StopQueryPerformanceMonitorResponse($result->toArray());
    }
}
