<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DeleteFuotaTask;

trait DeleteFuotaTaskTrait
{
    /**
     * @param DeleteFuotaTaskRequest $args
     * @return DeleteFuotaTaskResponse
     */
    public function deleteFuotaTask(DeleteFuotaTaskRequest $args)
    {
        $result = parent::deleteFuotaTask($args->toArray());
        return new DeleteFuotaTaskResponse($result->toArray());
    }
}
