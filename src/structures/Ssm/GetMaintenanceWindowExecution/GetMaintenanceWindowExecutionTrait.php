<?php

namespace Sunaoka\Aws\Structures\Ssm\GetMaintenanceWindowExecution;

trait GetMaintenanceWindowExecutionTrait
{
    /**
     * @param GetMaintenanceWindowExecutionRequest $args
     * @return GetMaintenanceWindowExecutionResponse
     */
    public function getMaintenanceWindowExecution(GetMaintenanceWindowExecutionRequest $args)
    {
        $result = parent::getMaintenanceWindowExecution($args->toArray());
        return new GetMaintenanceWindowExecutionResponse($result->toArray());
    }
}
