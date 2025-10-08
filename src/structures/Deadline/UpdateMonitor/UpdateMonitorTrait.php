<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateMonitor;

trait UpdateMonitorTrait
{
    /**
     * @param UpdateMonitorRequest $args
     * @return UpdateMonitorResponse
     */
    public function updateMonitor(UpdateMonitorRequest $args)
    {
        $result = parent::updateMonitor($args->toArray());
        return new UpdateMonitorResponse($result->toArray());
    }
}
