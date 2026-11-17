<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\CreatePerformanceMonitor;

trait CreatePerformanceMonitorTrait
{
    /**
     * @param CreatePerformanceMonitorRequest $args
     * @return CreatePerformanceMonitorResponse
     */
    public function createPerformanceMonitor(CreatePerformanceMonitorRequest $args)
    {
        $result = parent::createPerformanceMonitor($args->toArray());
        return new CreatePerformanceMonitorResponse($result->toArray());
    }
}
