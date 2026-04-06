<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribePermissions;

trait DescribePermissionsTrait
{
    /**
     * @param DescribePermissionsRequest $args
     * @return DescribePermissionsResponse
     */
    public function describePermissions(DescribePermissionsRequest $args)
    {
        $result = parent::describePermissions($args->toArray());
        return new DescribePermissionsResponse($result->toArray());
    }
}
