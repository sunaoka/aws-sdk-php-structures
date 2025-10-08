<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DescribeAcceleratorAttributes;

trait DescribeAcceleratorAttributesTrait
{
    /**
     * @param DescribeAcceleratorAttributesRequest $args
     * @return DescribeAcceleratorAttributesResponse
     */
    public function describeAcceleratorAttributes(DescribeAcceleratorAttributesRequest $args)
    {
        $result = parent::describeAcceleratorAttributes($args->toArray());
        return new DescribeAcceleratorAttributesResponse($result->toArray());
    }
}
