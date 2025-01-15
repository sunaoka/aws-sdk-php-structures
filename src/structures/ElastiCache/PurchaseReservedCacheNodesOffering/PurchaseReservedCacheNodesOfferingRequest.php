<?php

namespace Sunaoka\Aws\Structures\ElastiCache\PurchaseReservedCacheNodesOffering;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedCacheNodesOfferingId
 * @property string|null $ReservedCacheNodeId
 * @property int|null $CacheNodeCount
 * @property list<Shapes\Tag>|null $Tags
 */
class PurchaseReservedCacheNodesOfferingRequest extends Request
{
    /**
     * @param array{
     *     ReservedCacheNodesOfferingId: string,
     *     ReservedCacheNodeId?: string|null,
     *     CacheNodeCount?: int|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
