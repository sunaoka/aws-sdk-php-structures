<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeReservedCacheNodesOfferings;

trait DescribeReservedCacheNodesOfferingsTrait
{
    /**
     * @param DescribeReservedCacheNodesOfferingsRequest $args
     * @return DescribeReservedCacheNodesOfferingsResponse
     */
    public function describeReservedCacheNodesOfferings(DescribeReservedCacheNodesOfferingsRequest $args)
    {
        $result = parent::describeReservedCacheNodesOfferings($args->toArray());
        return new DescribeReservedCacheNodesOfferingsResponse($result->toArray());
    }
}
