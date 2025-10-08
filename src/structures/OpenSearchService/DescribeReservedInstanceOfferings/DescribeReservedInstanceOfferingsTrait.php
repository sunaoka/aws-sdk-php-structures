<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeReservedInstanceOfferings;

trait DescribeReservedInstanceOfferingsTrait
{
    /**
     * @param DescribeReservedInstanceOfferingsRequest $args
     * @return DescribeReservedInstanceOfferingsResponse
     */
    public function describeReservedInstanceOfferings(DescribeReservedInstanceOfferingsRequest $args)
    {
        $result = parent::describeReservedInstanceOfferings($args->toArray());
        return new DescribeReservedInstanceOfferingsResponse($result->toArray());
    }
}
