<?php

namespace Sunaoka\Aws\Structures\QApps\DescribeQAppPermissions;

trait DescribeQAppPermissionsTrait
{
    /**
     * @param DescribeQAppPermissionsRequest $args
     * @return DescribeQAppPermissionsResponse
     */
    public function describeQAppPermissions(DescribeQAppPermissionsRequest $args)
    {
        $result = parent::describeQAppPermissions($args->toArray());
        return new DescribeQAppPermissionsResponse($result->toArray());
    }
}
