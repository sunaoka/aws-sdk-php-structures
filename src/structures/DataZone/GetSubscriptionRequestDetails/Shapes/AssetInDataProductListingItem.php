<?php

namespace Sunaoka\Aws\Structures\DataZone\GetSubscriptionRequestDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $entityId
 * @property string|null $entityRevision
 * @property string|null $entityType
 */
class AssetInDataProductListingItem extends Shape
{
    /**
     * @param array{
     *     entityId?: string|null,
     *     entityRevision?: string|null,
     *     entityType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
