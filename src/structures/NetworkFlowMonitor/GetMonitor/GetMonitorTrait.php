<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetMonitor;

trait GetMonitorTrait
{
    /**
     * @param GetMonitorRequest $args
     * @return GetMonitorResponse
     */
    public function getMonitor(GetMonitorRequest $args)
    {
        $result = parent::getMonitor($args->toArray());
        return new GetMonitorResponse($result->toArray());
    }
}
