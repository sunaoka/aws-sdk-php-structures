<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DescribeCustomRoutingAcceleratorAttributes;

trait DescribeCustomRoutingAcceleratorAttributesTrait
{
    /**
     * @param DescribeCustomRoutingAcceleratorAttributesRequest $args
     * @return DescribeCustomRoutingAcceleratorAttributesResponse
     */
    public function describeCustomRoutingAcceleratorAttributes(
        DescribeCustomRoutingAcceleratorAttributesRequest $args,
    ) {
        $result = parent::describeCustomRoutingAcceleratorAttributes($args->toArray());
        return new DescribeCustomRoutingAcceleratorAttributesResponse($result->toArray());
    }
}
