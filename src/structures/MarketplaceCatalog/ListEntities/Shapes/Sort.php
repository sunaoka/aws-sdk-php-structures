<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SortBy
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 */
class Sort extends Shape
{
    /**
     * @param array{
     *     SortBy?: string,
     *     SortOrder?: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
