<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE'|null $TotalsVisibility
 * @property 'START'|'END'|'AUTO'|null $Placement
 * @property 'PINNED'|'SCROLLED'|null $ScrollStatus
 * @property string|null $CustomLabel
 * @property TableCellStyle|null $TotalCellStyle
 * @property TableCellStyle|null $ValueCellStyle
 * @property TableCellStyle|null $MetricHeaderCellStyle
 * @property list<TotalAggregationOption>|null $TotalAggregationOptions
 */
class PivotTotalOptions extends Shape
{
    /**
     * @param array{
     *     TotalsVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     Placement?: 'START'|'END'|'AUTO'|null,
     *     ScrollStatus?: 'PINNED'|'SCROLLED'|null,
     *     CustomLabel?: string|null,
     *     TotalCellStyle?: TableCellStyle|null,
     *     ValueCellStyle?: TableCellStyle|null,
     *     MetricHeaderCellStyle?: TableCellStyle|null,
     *     TotalAggregationOptions?: list<TotalAggregationOption>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
