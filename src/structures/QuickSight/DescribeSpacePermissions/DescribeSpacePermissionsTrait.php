<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeSpacePermissions;

trait DescribeSpacePermissionsTrait
{
    /**
     * @param DescribeSpacePermissionsRequest $args
     * @return DescribeSpacePermissionsResponse
     */
    public function describeSpacePermissions(DescribeSpacePermissionsRequest $args)
    {
        $result = parent::describeSpacePermissions($args->toArray());
        return new DescribeSpacePermissionsResponse($result->toArray());
    }
}
