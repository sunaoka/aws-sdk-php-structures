<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SameSheetTargetVisualConfiguration $SameSheetTargetVisualConfiguration
 */
class FilterOperationTargetVisualsConfiguration extends Shape
{
    /**
     * @param array{SameSheetTargetVisualConfiguration?: SameSheetTargetVisualConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
