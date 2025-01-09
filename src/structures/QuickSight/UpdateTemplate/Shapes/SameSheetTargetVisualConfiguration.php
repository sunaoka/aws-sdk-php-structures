<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $TargetVisuals
 * @property 'ALL_VISUALS' $TargetVisualOptions
 */
class SameSheetTargetVisualConfiguration extends Shape
{
    /**
     * @param array{
     *     TargetVisuals?: list<string>,
     *     TargetVisualOptions?: 'ALL_VISUALS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
