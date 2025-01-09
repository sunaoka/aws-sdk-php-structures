<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE' $TotalsVisibility
 * @property string $CustomLabel
 * @property 'ALL'|'CUSTOM'|'LAST' $FieldLevel
 * @property list<PivotTableFieldSubtotalOptions> $FieldLevelOptions
 * @property TableCellStyle $TotalCellStyle
 * @property TableCellStyle $ValueCellStyle
 * @property TableCellStyle $MetricHeaderCellStyle
 * @property list<TableStyleTarget> $StyleTargets
 */
class SubtotalOptions extends Shape
{
    /**
     * @param array{
     *     TotalsVisibility?: 'HIDDEN'|'VISIBLE',
     *     CustomLabel?: string,
     *     FieldLevel?: 'ALL'|'CUSTOM'|'LAST',
     *     FieldLevelOptions?: list<PivotTableFieldSubtotalOptions>,
     *     TotalCellStyle?: TableCellStyle,
     *     ValueCellStyle?: TableCellStyle,
     *     MetricHeaderCellStyle?: TableCellStyle,
     *     StyleTargets?: list<TableStyleTarget>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
