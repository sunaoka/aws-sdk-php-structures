<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\UpdatePerformanceMonitor;

trait UpdatePerformanceMonitorTrait
{
    /**
     * @param UpdatePerformanceMonitorRequest $args
     * @return UpdatePerformanceMonitorResponse
     */
    public function updatePerformanceMonitor(UpdatePerformanceMonitorRequest $args)
    {
        $result = parent::updatePerformanceMonitor($args->toArray());
        return new UpdatePerformanceMonitorResponse($result->toArray());
    }
}
