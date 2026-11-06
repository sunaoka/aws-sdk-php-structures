<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeResourcePermissions;

trait DescribeResourcePermissionsTrait
{
    /**
     * @param DescribeResourcePermissionsRequest $args
     * @return DescribeResourcePermissionsResponse
     */
    public function describeResourcePermissions(DescribeResourcePermissionsRequest $args)
    {
        $result = parent::describeResourcePermissions($args->toArray());
        return new DescribeResourcePermissionsResponse($result->toArray());
    }
}
