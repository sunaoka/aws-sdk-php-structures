<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property TextConditionalFormat $TextFormat
 * @property PivotTableConditionalFormattingScope $Scope
 * @property list<PivotTableConditionalFormattingScope> $Scopes
 */
class PivotTableCellConditionalFormatting extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     TextFormat?: TextConditionalFormat,
     *     Scope?: PivotTableConditionalFormattingScope,
     *     Scopes?: list<PivotTableConditionalFormattingScope>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
