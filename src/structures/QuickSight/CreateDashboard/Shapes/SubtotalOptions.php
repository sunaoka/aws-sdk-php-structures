<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE'|null $TotalsVisibility
 * @property string|null $CustomLabel
 * @property 'ALL'|'CUSTOM'|'LAST'|null $FieldLevel
 * @property list<PivotTableFieldSubtotalOptions>|null $FieldLevelOptions
 * @property TableCellStyle|null $TotalCellStyle
 * @property TableCellStyle|null $ValueCellStyle
 * @property TableCellStyle|null $MetricHeaderCellStyle
 * @property list<TableStyleTarget>|null $StyleTargets
 */
class SubtotalOptions extends Shape
{
    /**
     * @param array{
     *     TotalsVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     CustomLabel?: string|null,
     *     FieldLevel?: 'ALL'|'CUSTOM'|'LAST'|null,
     *     FieldLevelOptions?: list<PivotTableFieldSubtotalOptions>|null,
     *     TotalCellStyle?: TableCellStyle|null,
     *     ValueCellStyle?: TableCellStyle|null,
     *     MetricHeaderCellStyle?: TableCellStyle|null,
     *     StyleTargets?: list<TableStyleTarget>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
