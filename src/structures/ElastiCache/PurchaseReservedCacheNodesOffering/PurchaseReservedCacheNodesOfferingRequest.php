<?php

namespace Sunaoka\Aws\Structures\ElastiCache\PurchaseReservedCacheNodesOffering;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedCacheNodesOfferingId
 * @property string $ReservedCacheNodeId
 * @property int $CacheNodeCount
 * @property list<Shapes\Tag> $Tags
 */
class PurchaseReservedCacheNodesOfferingRequest extends Request
{
    /**
     * @param array{
     *     ReservedCacheNodesOfferingId: string,
     *     ReservedCacheNodeId?: string,
     *     CacheNodeCount?: int,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
