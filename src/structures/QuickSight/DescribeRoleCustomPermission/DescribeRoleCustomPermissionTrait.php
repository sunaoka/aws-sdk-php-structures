<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeRoleCustomPermission;

trait DescribeRoleCustomPermissionTrait
{
    /**
     * @param DescribeRoleCustomPermissionRequest $args
     * @return DescribeRoleCustomPermissionResponse
     */
    public function describeRoleCustomPermission(DescribeRoleCustomPermissionRequest $args)
    {
        $result = parent::describeRoleCustomPermission($args->toArray());
        return new DescribeRoleCustomPermissionResponse($result->toArray());
    }
}
