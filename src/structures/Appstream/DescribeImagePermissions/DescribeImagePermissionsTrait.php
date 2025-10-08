<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeImagePermissions;

trait DescribeImagePermissionsTrait
{
    /**
     * @param DescribeImagePermissionsRequest $args
     * @return DescribeImagePermissionsResponse
     */
    public function describeImagePermissions(DescribeImagePermissionsRequest $args)
    {
        $result = parent::describeImagePermissions($args->toArray());
        return new DescribeImagePermissionsResponse($result->toArray());
    }
}
