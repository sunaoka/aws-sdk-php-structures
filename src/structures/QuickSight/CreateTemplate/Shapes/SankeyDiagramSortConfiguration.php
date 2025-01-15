<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldSortOptions>|null $WeightSort
 * @property ItemsLimitConfiguration|null $SourceItemsLimit
 * @property ItemsLimitConfiguration|null $DestinationItemsLimit
 */
class SankeyDiagramSortConfiguration extends Shape
{
    /**
     * @param array{
     *     WeightSort?: list<FieldSortOptions>|null,
     *     SourceItemsLimit?: ItemsLimitConfiguration|null,
     *     DestinationItemsLimit?: ItemsLimitConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
