<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeResourcePermissions;

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
