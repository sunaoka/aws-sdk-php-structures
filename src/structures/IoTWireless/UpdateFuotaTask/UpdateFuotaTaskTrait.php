<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateFuotaTask;

trait UpdateFuotaTaskTrait
{
    /**
     * @param UpdateFuotaTaskRequest $args
     * @return UpdateFuotaTaskResponse
     */
    public function updateFuotaTask(UpdateFuotaTaskRequest $args)
    {
        $result = parent::updateFuotaTask($args->toArray());
        return new UpdateFuotaTaskResponse($result->toArray());
    }
}
