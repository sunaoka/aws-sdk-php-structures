<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DescribeCustomRoutingAccelerator;

trait DescribeCustomRoutingAcceleratorTrait
{
    /**
     * @param DescribeCustomRoutingAcceleratorRequest $args
     * @return DescribeCustomRoutingAcceleratorResponse
     */
    public function describeCustomRoutingAccelerator(DescribeCustomRoutingAcceleratorRequest $args)
    {
        $result = parent::describeCustomRoutingAccelerator($args->toArray());
        return new DescribeCustomRoutingAcceleratorResponse($result->toArray());
    }
}
