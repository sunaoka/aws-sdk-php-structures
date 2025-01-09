<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 */
class PivotTableFieldSubtotalOptions extends Shape
{
    /**
     * @param array{FieldId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
