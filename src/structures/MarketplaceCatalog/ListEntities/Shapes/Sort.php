<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SortBy
 * @property 'ASCENDING'|'DESCENDING'|null $SortOrder
 */
class Sort extends Shape
{
    /**
     * @param array{
     *     SortBy?: string|null,
     *     SortOrder?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
