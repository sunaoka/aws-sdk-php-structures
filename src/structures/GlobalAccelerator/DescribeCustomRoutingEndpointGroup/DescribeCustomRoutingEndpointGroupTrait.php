<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DescribeCustomRoutingEndpointGroup;

trait DescribeCustomRoutingEndpointGroupTrait
{
    /**
     * @param DescribeCustomRoutingEndpointGroupRequest $args
     * @return DescribeCustomRoutingEndpointGroupResponse
     */
    public function describeCustomRoutingEndpointGroup(DescribeCustomRoutingEndpointGroupRequest $args)
    {
        $result = parent::describeCustomRoutingEndpointGroup($args->toArray());
        return new DescribeCustomRoutingEndpointGroupResponse($result->toArray());
    }
}
