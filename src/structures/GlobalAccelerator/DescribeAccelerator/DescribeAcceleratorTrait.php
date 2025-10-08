<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DescribeAccelerator;

trait DescribeAcceleratorTrait
{
    /**
     * @param DescribeAcceleratorRequest $args
     * @return DescribeAcceleratorResponse
     */
    public function describeAccelerator(DescribeAcceleratorRequest $args)
    {
        $result = parent::describeAccelerator($args->toArray());
        return new DescribeAcceleratorResponse($result->toArray());
    }
}
