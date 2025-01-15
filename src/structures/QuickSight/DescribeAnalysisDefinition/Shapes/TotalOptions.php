<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE'|null $TotalsVisibility
 * @property 'START'|'END'|'AUTO'|null $Placement
 * @property 'PINNED'|'SCROLLED'|null $ScrollStatus
 * @property string|null $CustomLabel
 * @property TableCellStyle|null $TotalCellStyle
 * @property list<TotalAggregationOption>|null $TotalAggregationOptions
 */
class TotalOptions extends Shape
{
    /**
     * @param array{
     *     TotalsVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     Placement?: 'START'|'END'|'AUTO'|null,
     *     ScrollStatus?: 'PINNED'|'SCROLLED'|null,
     *     CustomLabel?: string|null,
     *     TotalCellStyle?: TableCellStyle|null,
     *     TotalAggregationOptions?: list<TotalAggregationOption>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
