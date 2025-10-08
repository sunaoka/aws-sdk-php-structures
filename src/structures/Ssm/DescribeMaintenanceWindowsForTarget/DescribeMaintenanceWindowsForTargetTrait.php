<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowsForTarget;

trait DescribeMaintenanceWindowsForTargetTrait
{
    /**
     * @param DescribeMaintenanceWindowsForTargetRequest $args
     * @return DescribeMaintenanceWindowsForTargetResponse
     */
    public function describeMaintenanceWindowsForTarget(DescribeMaintenanceWindowsForTargetRequest $args)
    {
        $result = parent::describeMaintenanceWindowsForTarget($args->toArray());
        return new DescribeMaintenanceWindowsForTargetResponse($result->toArray());
    }
}
