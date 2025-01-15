<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeReservedCacheNodesOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ReservedCacheNodesOfferingId
 * @property string|null $CacheNodeType
 * @property string|null $Duration
 * @property string|null $ProductDescription
 * @property string|null $OfferingType
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeReservedCacheNodesOfferingsRequest extends Request
{
    /**
     * @param array{
     *     ReservedCacheNodesOfferingId?: string|null,
     *     CacheNodeType?: string|null,
     *     Duration?: string|null,
     *     ProductDescription?: string|null,
     *     OfferingType?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
