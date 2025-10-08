<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindows;

trait DescribeMaintenanceWindowsTrait
{
    /**
     * @param DescribeMaintenanceWindowsRequest $args
     * @return DescribeMaintenanceWindowsResponse
     */
    public function describeMaintenanceWindows(DescribeMaintenanceWindowsRequest $args)
    {
        $result = parent::describeMaintenanceWindows($args->toArray());
        return new DescribeMaintenanceWindowsResponse($result->toArray());
    }
}
