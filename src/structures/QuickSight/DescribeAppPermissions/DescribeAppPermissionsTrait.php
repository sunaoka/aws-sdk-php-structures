<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAppPermissions;

trait DescribeAppPermissionsTrait
{
    /**
     * @param DescribeAppPermissionsRequest $args
     * @return DescribeAppPermissionsResponse
     */
    public function describeAppPermissions(DescribeAppPermissionsRequest $args)
    {
        $result = parent::describeAppPermissions($args->toArray());
        return new DescribeAppPermissionsResponse($result->toArray());
    }
}
