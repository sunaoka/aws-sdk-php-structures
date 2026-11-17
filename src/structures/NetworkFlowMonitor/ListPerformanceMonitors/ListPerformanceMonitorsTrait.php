<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\ListPerformanceMonitors;

trait ListPerformanceMonitorsTrait
{
    /**
     * @param ListPerformanceMonitorsRequest $args
     * @return ListPerformanceMonitorsResponse
     */
    public function listPerformanceMonitors(ListPerformanceMonitorsRequest $args)
    {
        $result = parent::listPerformanceMonitors($args->toArray());
        return new ListPerformanceMonitorsResponse($result->toArray());
    }
}
