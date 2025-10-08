<?php

namespace Sunaoka\Aws\Structures\Ssm\CancelMaintenanceWindowExecution;

trait CancelMaintenanceWindowExecutionTrait
{
    /**
     * @param CancelMaintenanceWindowExecutionRequest $args
     * @return CancelMaintenanceWindowExecutionResponse
     */
    public function cancelMaintenanceWindowExecution(CancelMaintenanceWindowExecutionRequest $args)
    {
        $result = parent::cancelMaintenanceWindowExecution($args->toArray());
        return new CancelMaintenanceWindowExecutionResponse($result->toArray());
    }
}
