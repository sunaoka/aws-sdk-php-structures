<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptionRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entityId
 * @property string $entityRevision
 * @property string $entityType
 */
class AssetInDataProductListingItem extends Shape
{
    /**
     * @param array{
     *     entityId?: string,
     *     entityRevision?: string,
     *     entityType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
