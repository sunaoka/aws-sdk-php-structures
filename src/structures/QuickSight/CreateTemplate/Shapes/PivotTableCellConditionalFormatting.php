<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property TextConditionalFormat|null $TextFormat
 * @property PivotTableConditionalFormattingScope|null $Scope
 * @property list<PivotTableConditionalFormattingScope>|null $Scopes
 */
class PivotTableCellConditionalFormatting extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     TextFormat?: TextConditionalFormat|null,
     *     Scope?: PivotTableConditionalFormattingScope|null,
     *     Scopes?: list<PivotTableConditionalFormattingScope>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
