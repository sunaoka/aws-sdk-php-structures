<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateOtaTask;

trait CreateOtaTaskTrait
{
    /**
     * @param CreateOtaTaskRequest $args
     * @return CreateOtaTaskResponse
     */
    public function createOtaTask(CreateOtaTaskRequest $args)
    {
        $result = parent::createOtaTask($args->toArray());
        return new CreateOtaTaskResponse($result->toArray());
    }
}
