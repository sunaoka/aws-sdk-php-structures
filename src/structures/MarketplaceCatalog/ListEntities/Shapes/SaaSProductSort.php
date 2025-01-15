<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EntityId'|'ProductTitle'|'Visibility'|'LastModifiedDate'|null $SortBy
 * @property 'ASCENDING'|'DESCENDING'|null $SortOrder
 */
class SaaSProductSort extends Shape
{
    /**
     * @param array{
     *     SortBy?: 'EntityId'|'ProductTitle'|'Visibility'|'LastModifiedDate'|null,
     *     SortOrder?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
