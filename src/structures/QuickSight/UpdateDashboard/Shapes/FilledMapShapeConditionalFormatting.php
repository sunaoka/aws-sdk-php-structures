<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property ShapeConditionalFormat $Format
 */
class FilledMapShapeConditionalFormatting extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     Format?: ShapeConditionalFormat
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
