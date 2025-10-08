<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\GetAppMonitor;

trait GetAppMonitorTrait
{
    /**
     * @param GetAppMonitorRequest $args
     * @return GetAppMonitorResponse
     */
    public function getAppMonitor(GetAppMonitorRequest $args)
    {
        $result = parent::getAppMonitor($args->toArray());
        return new GetAppMonitorResponse($result->toArray());
    }
}
