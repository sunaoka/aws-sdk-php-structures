<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAccountCustomPermission;

trait DescribeAccountCustomPermissionTrait
{
    /**
     * @param DescribeAccountCustomPermissionRequest $args
     * @return DescribeAccountCustomPermissionResponse
     */
    public function describeAccountCustomPermission(DescribeAccountCustomPermissionRequest $args)
    {
        $result = parent::describeAccountCustomPermission($args->toArray());
        return new DescribeAccountCustomPermissionResponse($result->toArray());
    }
}
