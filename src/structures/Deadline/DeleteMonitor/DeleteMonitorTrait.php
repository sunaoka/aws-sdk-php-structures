<?php

namespace Sunaoka\Aws\Structures\Deadline\DeleteMonitor;

trait DeleteMonitorTrait
{
    /**
     * @param DeleteMonitorRequest $args
     * @return DeleteMonitorResponse
     */
    public function deleteMonitor(DeleteMonitorRequest $args)
    {
        $result = parent::deleteMonitor($args->toArray());
        return new DeleteMonitorResponse($result->toArray());
    }
}
