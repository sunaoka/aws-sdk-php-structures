<?php

namespace Sunaoka\Aws\Structures\Ssm\GetMaintenanceWindowExecutionTaskInvocation;

trait GetMaintenanceWindowExecutionTaskInvocationTrait
{
    /**
     * @param GetMaintenanceWindowExecutionTaskInvocationRequest $args
     * @return GetMaintenanceWindowExecutionTaskInvocationResponse
     */
    public function getMaintenanceWindowExecutionTaskInvocation(
        GetMaintenanceWindowExecutionTaskInvocationRequest $args,
    ) {
        $result = parent::getMaintenanceWindowExecutionTaskInvocation($args->toArray());
        return new GetMaintenanceWindowExecutionTaskInvocationResponse($result->toArray());
    }
}
