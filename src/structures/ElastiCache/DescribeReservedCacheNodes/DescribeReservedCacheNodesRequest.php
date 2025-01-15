<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeReservedCacheNodes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ReservedCacheNodeId
 * @property string|null $ReservedCacheNodesOfferingId
 * @property string|null $CacheNodeType
 * @property string|null $Duration
 * @property string|null $ProductDescription
 * @property string|null $OfferingType
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeReservedCacheNodesRequest extends Request
{
    /**
     * @param array{
     *     ReservedCacheNodeId?: string|null,
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
