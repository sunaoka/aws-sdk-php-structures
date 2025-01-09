<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldSortOptions> $WeightSort
 * @property ItemsLimitConfiguration $SourceItemsLimit
 * @property ItemsLimitConfiguration $DestinationItemsLimit
 */
class SankeyDiagramSortConfiguration extends Shape
{
    /**
     * @param array{
     *     WeightSort?: list<FieldSortOptions>,
     *     SourceItemsLimit?: ItemsLimitConfiguration,
     *     DestinationItemsLimit?: ItemsLimitConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
