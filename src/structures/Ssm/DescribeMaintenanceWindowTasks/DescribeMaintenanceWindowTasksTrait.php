<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowTasks;

trait DescribeMaintenanceWindowTasksTrait
{
    /**
     * @param DescribeMaintenanceWindowTasksRequest $args
     * @return DescribeMaintenanceWindowTasksResponse
     */
    public function describeMaintenanceWindowTasks(DescribeMaintenanceWindowTasksRequest $args)
    {
        $result = parent::describeMaintenanceWindowTasks($args->toArray());
        return new DescribeMaintenanceWindowTasksResponse($result->toArray());
    }
}
