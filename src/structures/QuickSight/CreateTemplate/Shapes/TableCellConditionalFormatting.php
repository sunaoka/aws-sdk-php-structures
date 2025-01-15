<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property TextConditionalFormat|null $TextFormat
 */
class TableCellConditionalFormatting extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     TextFormat?: TextConditionalFormat|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
