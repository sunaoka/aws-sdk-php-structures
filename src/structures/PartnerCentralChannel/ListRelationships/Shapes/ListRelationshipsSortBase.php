<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\ListRelationships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Ascending'|'Descending' $sortOrder
 * @property 'UpdatedAt' $sortBy
 */
class ListRelationshipsSortBase extends Shape
{
    /**
     * @param array{
     *     sortOrder: 'Ascending'|'Descending',
     *     sortBy: 'UpdatedAt'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
