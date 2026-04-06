<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE'|null $TotalsVisibility
 * @property 'START'|'END'|null $Placement
 * @property 'PINNED'|'SCROLLED'|null $ScrollStatus
 * @property string|null $CustomLabel
 * @property TableCellStyle|null $TotalCellStyle
 * @property TableCellStyle|null $ValueCellStyle
 * @property TableCellStyle|null $MetricHeaderCellStyle
 */
class PivotTotalOptions extends Shape
{
    /**
     * @param array{
     *     TotalsVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     Placement?: 'START'|'END'|null,
     *     ScrollStatus?: 'PINNED'|'SCROLLED'|null,
     *     CustomLabel?: string|null,
     *     TotalCellStyle?: TableCellStyle|null,
     *     ValueCellStyle?: TableCellStyle|null,
     *     MetricHeaderCellStyle?: TableCellStyle|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
