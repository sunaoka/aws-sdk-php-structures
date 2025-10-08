<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowExecutionTasks;

trait DescribeMaintenanceWindowExecutionTasksTrait
{
    /**
     * @param DescribeMaintenanceWindowExecutionTasksRequest $args
     * @return DescribeMaintenanceWindowExecutionTasksResponse
     */
    public function describeMaintenanceWindowExecutionTasks(DescribeMaintenanceWindowExecutionTasksRequest $args)
    {
        $result = parent::describeMaintenanceWindowExecutionTasks($args->toArray());
        return new DescribeMaintenanceWindowExecutionTasksResponse($result->toArray());
    }
}
