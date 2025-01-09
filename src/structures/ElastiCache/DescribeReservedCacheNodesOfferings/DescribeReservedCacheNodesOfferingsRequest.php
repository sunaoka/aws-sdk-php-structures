<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeReservedCacheNodesOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedCacheNodesOfferingId
 * @property string $CacheNodeType
 * @property string $Duration
 * @property string $ProductDescription
 * @property string $OfferingType
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeReservedCacheNodesOfferingsRequest extends Request
{
    /**
     * @param array{
     *     ReservedCacheNodesOfferingId?: string,
     *     CacheNodeType?: string,
     *     Duration?: string,
     *     ProductDescription?: string,
     *     OfferingType?: string,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
