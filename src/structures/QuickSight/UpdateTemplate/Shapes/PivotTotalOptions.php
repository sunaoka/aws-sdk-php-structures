<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE' $TotalsVisibility
 * @property 'START'|'END'|'AUTO' $Placement
 * @property 'PINNED'|'SCROLLED' $ScrollStatus
 * @property string $CustomLabel
 * @property TableCellStyle $TotalCellStyle
 * @property TableCellStyle $ValueCellStyle
 * @property TableCellStyle $MetricHeaderCellStyle
 * @property list<TotalAggregationOption> $TotalAggregationOptions
 */
class PivotTotalOptions extends Shape
{
    /**
     * @param array{
     *     TotalsVisibility?: 'HIDDEN'|'VISIBLE',
     *     Placement?: 'START'|'END'|'AUTO',
     *     ScrollStatus?: 'PINNED'|'SCROLLED',
     *     CustomLabel?: string,
     *     TotalCellStyle?: TableCellStyle,
     *     ValueCellStyle?: TableCellStyle,
     *     MetricHeaderCellStyle?: TableCellStyle,
     *     TotalAggregationOptions?: list<TotalAggregationOption>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
