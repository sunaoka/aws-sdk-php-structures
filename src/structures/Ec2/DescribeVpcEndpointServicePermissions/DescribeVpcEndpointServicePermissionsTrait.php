<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpointServicePermissions;

trait DescribeVpcEndpointServicePermissionsTrait
{
    /**
     * @param DescribeVpcEndpointServicePermissionsRequest $args
     * @return DescribeVpcEndpointServicePermissionsResponse
     */
    public function describeVpcEndpointServicePermissions(DescribeVpcEndpointServicePermissionsRequest $args)
    {
        $result = parent::describeVpcEndpointServicePermissions($args->toArray());
        return new DescribeVpcEndpointServicePermissionsResponse($result->toArray());
    }
}
