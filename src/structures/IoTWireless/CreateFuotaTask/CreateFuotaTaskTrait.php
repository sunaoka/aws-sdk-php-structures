<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateFuotaTask;

trait CreateFuotaTaskTrait
{
    /**
     * @param CreateFuotaTaskRequest $args
     * @return CreateFuotaTaskResponse
     */
    public function createFuotaTask(CreateFuotaTaskRequest $args)
    {
        $result = parent::createFuotaTask($args->toArray());
        return new CreateFuotaTaskResponse($result->toArray());
    }
}
