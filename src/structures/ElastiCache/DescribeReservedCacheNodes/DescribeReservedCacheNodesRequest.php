<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeReservedCacheNodes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedCacheNodeId
 * @property string $ReservedCacheNodesOfferingId
 * @property string $CacheNodeType
 * @property string $Duration
 * @property string $ProductDescription
 * @property string $OfferingType
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeReservedCacheNodesRequest extends Request
{
    /**
     * @param array{
     *     ReservedCacheNodeId?: string,
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
