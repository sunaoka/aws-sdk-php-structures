<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityBlockExtensionOfferings;

trait DescribeCapacityBlockExtensionOfferingsTrait
{
    /**
     * @param DescribeCapacityBlockExtensionOfferingsRequest $args
     * @return DescribeCapacityBlockExtensionOfferingsResponse
     */
    public function describeCapacityBlockExtensionOfferings(DescribeCapacityBlockExtensionOfferingsRequest $args)
    {
        $result = parent::describeCapacityBlockExtensionOfferings($args->toArray());
        return new DescribeCapacityBlockExtensionOfferingsResponse($result->toArray());
    }
}
