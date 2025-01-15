<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $TargetVisuals
 * @property 'ALL_VISUALS'|null $TargetVisualOptions
 */
class SameSheetTargetVisualConfiguration extends Shape
{
    /**
     * @param array{
     *     TargetVisuals?: list<string>|null,
     *     TargetVisualOptions?: 'ALL_VISUALS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
