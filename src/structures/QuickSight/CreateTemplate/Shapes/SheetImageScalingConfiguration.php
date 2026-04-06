<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SCALE_TO_WIDTH'|'SCALE_TO_HEIGHT'|'SCALE_TO_CONTAINER'|'SCALE_NONE'|null $ScalingType
 */
class SheetImageScalingConfiguration extends Shape
{
    /**
     * @param array{ScalingType?: 'SCALE_TO_WIDTH'|'SCALE_TO_HEIGHT'|'SCALE_TO_CONTAINER'|'SCALE_NONE'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
