<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetFuotaTask;

trait GetFuotaTaskTrait
{
    /**
     * @param GetFuotaTaskRequest $args
     * @return GetFuotaTaskResponse
     */
    public function getFuotaTask(GetFuotaTaskRequest $args)
    {
        $result = parent::getFuotaTask($args->toArray());
        return new GetFuotaTaskResponse($result->toArray());
    }
}
