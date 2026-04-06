<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListSolutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 * @property 'Identifier'|'Name'|'Status'|'Category'|'CreatedDate' $SortBy
 */
class SolutionSort extends Shape
{
    /**
     * @param array{
     *     SortOrder: 'ASCENDING'|'DESCENDING',
     *     SortBy: 'Identifier'|'Name'|'Status'|'Category'|'CreatedDate'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
