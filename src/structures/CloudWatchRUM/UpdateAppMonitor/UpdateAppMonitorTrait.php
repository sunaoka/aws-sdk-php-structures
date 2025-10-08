<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\UpdateAppMonitor;

trait UpdateAppMonitorTrait
{
    /**
     * @param UpdateAppMonitorRequest $args
     * @return UpdateAppMonitorResponse
     */
    public function updateAppMonitor(UpdateAppMonitorRequest $args)
    {
        $result = parent::updateAppMonitor($args->toArray());
        return new UpdateAppMonitorResponse($result->toArray());
    }
}
