<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListSolutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Identifier'|'Name'|'Status'|'Category'|'CreatedDate' $SortBy
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 */
class SolutionSort extends Shape
{
    /**
     * @param array{
     *     SortBy: 'Identifier'|'Name'|'Status'|'Category'|'CreatedDate',
     *     SortOrder: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
