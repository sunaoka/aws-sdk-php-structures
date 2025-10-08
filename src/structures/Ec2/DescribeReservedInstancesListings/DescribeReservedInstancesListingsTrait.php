<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeReservedInstancesListings;

trait DescribeReservedInstancesListingsTrait
{
    /**
     * @param DescribeReservedInstancesListingsRequest $args
     * @return DescribeReservedInstancesListingsResponse
     */
    public function describeReservedInstancesListings(DescribeReservedInstancesListingsRequest $args)
    {
        $result = parent::describeReservedInstancesListings($args->toArray());
        return new DescribeReservedInstancesListingsResponse($result->toArray());
    }
}
