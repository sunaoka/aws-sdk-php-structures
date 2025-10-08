<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowExecutionTaskInvocations;

trait DescribeMaintenanceWindowExecutionTaskInvocationsTrait
{
    /**
     * @param DescribeMaintenanceWindowExecutionTaskInvocationsRequest $args
     * @return DescribeMaintenanceWindowExecutionTaskInvocationsResponse
     */
    public function describeMaintenanceWindowExecutionTaskInvocations(DescribeMaintenanceWindowExecutionTaskInvocationsRequest $args)
    {
        $result = parent::describeMaintenanceWindowExecutionTaskInvocations($args->toArray());
        return new DescribeMaintenanceWindowExecutionTaskInvocationsResponse($result->toArray());
    }
}
