<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeReservedCapacity;

trait DescribeReservedCapacityTrait
{
    /**
     * @param DescribeReservedCapacityRequest $args
     * @return DescribeReservedCapacityResponse
     */
    public function describeReservedCapacity(DescribeReservedCapacityRequest $args)
    {
        $result = parent::describeReservedCapacity($args->toArray());
        return new DescribeReservedCapacityResponse($result->toArray());
    }
}
