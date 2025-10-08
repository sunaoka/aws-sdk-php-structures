<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypeOfferings;

trait DescribeInstanceTypeOfferingsTrait
{
    /**
     * @param DescribeInstanceTypeOfferingsRequest $args
     * @return DescribeInstanceTypeOfferingsResponse
     */
    public function describeInstanceTypeOfferings(DescribeInstanceTypeOfferingsRequest $args)
    {
        $result = parent::describeInstanceTypeOfferings($args->toArray());
        return new DescribeInstanceTypeOfferingsResponse($result->toArray());
    }
}
