<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\DeleteAppMonitor;

trait DeleteAppMonitorTrait
{
    /**
     * @param DeleteAppMonitorRequest $args
     * @return DeleteAppMonitorResponse
     */
    public function deleteAppMonitor(DeleteAppMonitorRequest $args)
    {
        $result = parent::deleteAppMonitor($args->toArray());
        return new DeleteAppMonitorResponse($result->toArray());
    }
}
