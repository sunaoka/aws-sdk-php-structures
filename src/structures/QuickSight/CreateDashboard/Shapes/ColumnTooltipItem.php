<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColumnIdentifier $Column
 * @property string $Label
 * @property 'HIDDEN'|'VISIBLE' $Visibility
 * @property AggregationFunction $Aggregation
 * @property 'BOTH'|'BAR'|'LINE' $TooltipTarget
 */
class ColumnTooltipItem extends Shape
{
    /**
     * @param array{
     *     Column: ColumnIdentifier,
     *     Label?: string,
     *     Visibility?: 'HIDDEN'|'VISIBLE',
     *     Aggregation?: AggregationFunction,
     *     TooltipTarget?: 'BOTH'|'BAR'|'LINE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
