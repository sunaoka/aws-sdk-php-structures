<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeReservedNodeOfferings;

trait DescribeReservedNodeOfferingsTrait
{
    /**
     * @param DescribeReservedNodeOfferingsRequest $args
     * @return DescribeReservedNodeOfferingsResponse
     */
    public function describeReservedNodeOfferings(DescribeReservedNodeOfferingsRequest $args)
    {
        $result = parent::describeReservedNodeOfferings($args->toArray());
        return new DescribeReservedNodeOfferingsResponse($result->toArray());
    }
}
