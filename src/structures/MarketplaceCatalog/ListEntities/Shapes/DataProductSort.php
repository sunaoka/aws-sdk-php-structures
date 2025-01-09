<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EntityId'|'ProductTitle'|'Visibility'|'LastModifiedDate' $SortBy
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 */
class DataProductSort extends Shape
{
    /**
     * @param array{
     *     SortBy?: 'EntityId'|'ProductTitle'|'Visibility'|'LastModifiedDate',
     *     SortOrder?: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
