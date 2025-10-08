<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeThemePermissions;

trait DescribeThemePermissionsTrait
{
    /**
     * @param DescribeThemePermissionsRequest $args
     * @return DescribeThemePermissionsResponse
     */
    public function describeThemePermissions(DescribeThemePermissionsRequest $args)
    {
        $result = parent::describeThemePermissions($args->toArray());
        return new DescribeThemePermissionsResponse($result->toArray());
    }
}
