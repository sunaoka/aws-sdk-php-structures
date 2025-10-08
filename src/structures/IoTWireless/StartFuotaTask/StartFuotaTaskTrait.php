<?php

namespace Sunaoka\Aws\Structures\IoTWireless\StartFuotaTask;

trait StartFuotaTaskTrait
{
    /**
     * @param StartFuotaTaskRequest $args
     * @return StartFuotaTaskResponse
     */
    public function startFuotaTask(StartFuotaTaskRequest $args)
    {
        $result = parent::startFuotaTask($args->toArray());
        return new StartFuotaTaskResponse($result->toArray());
    }
}
