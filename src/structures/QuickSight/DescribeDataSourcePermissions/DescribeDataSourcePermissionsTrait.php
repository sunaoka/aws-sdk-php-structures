<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSourcePermissions;

trait DescribeDataSourcePermissionsTrait
{
    /**
     * @param DescribeDataSourcePermissionsRequest $args
     * @return DescribeDataSourcePermissionsResponse
     */
    public function describeDataSourcePermissions(DescribeDataSourcePermissionsRequest $args)
    {
        $result = parent::describeDataSourcePermissions($args->toArray());
        return new DescribeDataSourcePermissionsResponse($result->toArray());
    }
}
