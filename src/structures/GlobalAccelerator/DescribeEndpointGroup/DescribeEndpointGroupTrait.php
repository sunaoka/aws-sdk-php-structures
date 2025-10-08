<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DescribeEndpointGroup;

trait DescribeEndpointGroupTrait
{
    /**
     * @param DescribeEndpointGroupRequest $args
     * @return DescribeEndpointGroupResponse
     */
    public function describeEndpointGroup(DescribeEndpointGroupRequest $args)
    {
        $result = parent::describeEndpointGroup($args->toArray());
        return new DescribeEndpointGroupResponse($result->toArray());
    }
}
