<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeReservedElasticsearchInstanceOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ReservedElasticsearchInstanceOfferingId
 * @property int<min, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeReservedElasticsearchInstanceOfferingsRequest extends Request
{
    /**
     * @param array{
     *     ReservedElasticsearchInstanceOfferingId?: string|null,
     *     MaxResults?: int<min, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
