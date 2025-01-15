<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property ShapeConditionalFormat|null $Format
 */
class FilledMapShapeConditionalFormatting extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     Format?: ShapeConditionalFormat|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
