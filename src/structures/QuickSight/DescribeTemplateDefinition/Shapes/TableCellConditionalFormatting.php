<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property TextConditionalFormat $TextFormat
 */
class TableCellConditionalFormatting extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     TextFormat?: TextConditionalFormat
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
