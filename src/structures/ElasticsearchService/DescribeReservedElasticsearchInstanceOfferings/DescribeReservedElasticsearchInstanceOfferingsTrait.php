<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeReservedElasticsearchInstanceOfferings;

trait DescribeReservedElasticsearchInstanceOfferingsTrait
{
    /**
     * @param DescribeReservedElasticsearchInstanceOfferingsRequest $args
     * @return DescribeReservedElasticsearchInstanceOfferingsResponse
     */
    public function describeReservedElasticsearchInstanceOfferings(
        DescribeReservedElasticsearchInstanceOfferingsRequest $args,
    ) {
        $result = parent::describeReservedElasticsearchInstanceOfferings($args->toArray());
        return new DescribeReservedElasticsearchInstanceOfferingsResponse($result->toArray());
    }
}
