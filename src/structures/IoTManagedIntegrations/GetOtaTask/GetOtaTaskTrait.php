<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetOtaTask;

trait GetOtaTaskTrait
{
    /**
     * @param GetOtaTaskRequest $args
     * @return GetOtaTaskResponse
     */
    public function getOtaTask(GetOtaTaskRequest $args)
    {
        $result = parent::getOtaTask($args->toArray());
        return new GetOtaTaskResponse($result->toArray());
    }
}
