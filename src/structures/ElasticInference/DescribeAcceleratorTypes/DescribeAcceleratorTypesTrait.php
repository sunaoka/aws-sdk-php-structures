<?php

namespace Sunaoka\Aws\Structures\ElasticInference\DescribeAcceleratorTypes;

trait DescribeAcceleratorTypesTrait
{
    /**
     * @param DescribeAcceleratorTypesRequest $args
     * @return DescribeAcceleratorTypesResponse
     */
    public function describeAcceleratorTypes(DescribeAcceleratorTypesRequest $args)
    {
        $result = parent::describeAcceleratorTypes($args->toArray());
        return new DescribeAcceleratorTypesResponse($result->toArray());
    }
}
