<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeReservedInstancesOfferings;

trait DescribeReservedInstancesOfferingsTrait
{
    /**
     * @param DescribeReservedInstancesOfferingsRequest $args
     * @return DescribeReservedInstancesOfferingsResponse
     */
    public function describeReservedInstancesOfferings(DescribeReservedInstancesOfferingsRequest $args)
    {
        $result = parent::describeReservedInstancesOfferings($args->toArray());
        return new DescribeReservedInstancesOfferingsResponse($result->toArray());
    }
}
