<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityBlockOfferings;

trait DescribeCapacityBlockOfferingsTrait
{
    /**
     * @param DescribeCapacityBlockOfferingsRequest $args
     * @return DescribeCapacityBlockOfferingsResponse
     */
    public function describeCapacityBlockOfferings(DescribeCapacityBlockOfferingsRequest $args)
    {
        $result = parent::describeCapacityBlockOfferings($args->toArray());
        return new DescribeCapacityBlockOfferingsResponse($result->toArray());
    }
}
