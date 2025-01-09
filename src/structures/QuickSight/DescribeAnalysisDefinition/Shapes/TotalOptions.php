<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE' $TotalsVisibility
 * @property 'START'|'END'|'AUTO' $Placement
 * @property 'PINNED'|'SCROLLED' $ScrollStatus
 * @property string $CustomLabel
 * @property TableCellStyle $TotalCellStyle
 * @property list<TotalAggregationOption> $TotalAggregationOptions
 */
class TotalOptions extends Shape
{
    /**
     * @param array{
     *     TotalsVisibility?: 'HIDDEN'|'VISIBLE',
     *     Placement?: 'START'|'END'|'AUTO',
     *     ScrollStatus?: 'PINNED'|'SCROLLED',
     *     CustomLabel?: string,
     *     TotalCellStyle?: TableCellStyle,
     *     TotalAggregationOptions?: list<TotalAggregationOption>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
