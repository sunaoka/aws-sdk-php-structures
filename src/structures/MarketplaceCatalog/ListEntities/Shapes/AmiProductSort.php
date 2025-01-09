<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EntityId'|'LastModifiedDate'|'ProductTitle'|'Visibility' $SortBy
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 */
class AmiProductSort extends Shape
{
    /**
     * @param array{
     *     SortBy?: 'EntityId'|'LastModifiedDate'|'ProductTitle'|'Visibility',
     *     SortOrder?: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
