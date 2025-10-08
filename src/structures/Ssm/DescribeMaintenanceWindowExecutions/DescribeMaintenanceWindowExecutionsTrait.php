<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowExecutions;

trait DescribeMaintenanceWindowExecutionsTrait
{
    /**
     * @param DescribeMaintenanceWindowExecutionsRequest $args
     * @return DescribeMaintenanceWindowExecutionsResponse
     */
    public function describeMaintenanceWindowExecutions(DescribeMaintenanceWindowExecutionsRequest $args)
    {
        $result = parent::describeMaintenanceWindowExecutions($args->toArray());
        return new DescribeMaintenanceWindowExecutionsResponse($result->toArray());
    }
}
