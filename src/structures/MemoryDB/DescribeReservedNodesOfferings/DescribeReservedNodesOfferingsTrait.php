<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeReservedNodesOfferings;

trait DescribeReservedNodesOfferingsTrait
{
    /**
     * @param DescribeReservedNodesOfferingsRequest $args
     * @return DescribeReservedNodesOfferingsResponse
     */
    public function describeReservedNodesOfferings(DescribeReservedNodesOfferingsRequest $args)
    {
        $result = parent::describeReservedNodesOfferings($args->toArray());
        return new DescribeReservedNodesOfferingsResponse($result->toArray());
    }
}
