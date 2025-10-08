<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeCustomPermissions;

trait DescribeCustomPermissionsTrait
{
    /**
     * @param DescribeCustomPermissionsRequest $args
     * @return DescribeCustomPermissionsResponse
     */
    public function describeCustomPermissions(DescribeCustomPermissionsRequest $args)
    {
        $result = parent::describeCustomPermissions($args->toArray());
        return new DescribeCustomPermissionsResponse($result->toArray());
    }
}
