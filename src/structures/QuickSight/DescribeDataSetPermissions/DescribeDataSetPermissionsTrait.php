<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSetPermissions;

trait DescribeDataSetPermissionsTrait
{
    /**
     * @param DescribeDataSetPermissionsRequest $args
     * @return DescribeDataSetPermissionsResponse
     */
    public function describeDataSetPermissions(DescribeDataSetPermissionsRequest $args)
    {
        $result = parent::describeDataSetPermissions($args->toArray());
        return new DescribeDataSetPermissionsResponse($result->toArray());
    }
}
