<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeReservedElasticsearchInstanceOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedElasticsearchInstanceOfferingId
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeReservedElasticsearchInstanceOfferingsRequest extends Request
{
    /**
     * @param array{
     *     ReservedElasticsearchInstanceOfferingId?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
