<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeActionConnectorPermissions;

trait DescribeActionConnectorPermissionsTrait
{
    /**
     * @param DescribeActionConnectorPermissionsRequest $args
     * @return DescribeActionConnectorPermissionsResponse
     */
    public function describeActionConnectorPermissions(DescribeActionConnectorPermissionsRequest $args)
    {
        $result = parent::describeActionConnectorPermissions($args->toArray());
        return new DescribeActionConnectorPermissionsResponse($result->toArray());
    }
}
