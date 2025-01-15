<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColumnIdentifier $Column
 * @property string|null $Label
 * @property 'HIDDEN'|'VISIBLE'|null $Visibility
 * @property AggregationFunction|null $Aggregation
 * @property 'BOTH'|'BAR'|'LINE'|null $TooltipTarget
 */
class ColumnTooltipItem extends Shape
{
    /**
     * @param array{
     *     Column: ColumnIdentifier,
     *     Label?: string|null,
     *     Visibility?: 'HIDDEN'|'VISIBLE'|null,
     *     Aggregation?: AggregationFunction|null,
     *     TooltipTarget?: 'BOTH'|'BAR'|'LINE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
