<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInterfacePermissions;

trait DescribeNetworkInterfacePermissionsTrait
{
    /**
     * @param DescribeNetworkInterfacePermissionsRequest $args
     * @return DescribeNetworkInterfacePermissionsResponse
     */
    public function describeNetworkInterfacePermissions(DescribeNetworkInterfacePermissionsRequest $args)
    {
        $result = parent::describeNetworkInterfacePermissions($args->toArray());
        return new DescribeNetworkInterfacePermissionsResponse($result->toArray());
    }
}
