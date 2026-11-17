<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\DeletePerformanceMonitor;

trait DeletePerformanceMonitorTrait
{
    /**
     * @param DeletePerformanceMonitorRequest $args
     * @return DeletePerformanceMonitorResponse
     */
    public function deletePerformanceMonitor(DeletePerformanceMonitorRequest $args)
    {
        $result = parent::deletePerformanceMonitor($args->toArray());
        return new DeletePerformanceMonitorResponse($result->toArray());
    }
}
