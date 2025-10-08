<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowTargets;

trait DescribeMaintenanceWindowTargetsTrait
{
    /**
     * @param DescribeMaintenanceWindowTargetsRequest $args
     * @return DescribeMaintenanceWindowTargetsResponse
     */
    public function describeMaintenanceWindowTargets(DescribeMaintenanceWindowTargetsRequest $args)
    {
        $result = parent::describeMaintenanceWindowTargets($args->toArray());
        return new DescribeMaintenanceWindowTargetsResponse($result->toArray());
    }
}
