<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EntityId'|'LastModifiedDate'|'ProductTitle'|'Visibility'|null $SortBy
 * @property 'ASCENDING'|'DESCENDING'|null $SortOrder
 */
class MachineLearningProductSort extends Shape
{
    /**
     * @param array{
     *     SortBy?: 'EntityId'|'LastModifiedDate'|'ProductTitle'|'Visibility'|null,
     *     SortOrder?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
