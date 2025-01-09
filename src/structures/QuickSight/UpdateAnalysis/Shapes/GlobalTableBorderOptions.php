<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TableBorderOptions $UniformBorder
 * @property TableSideBorderOptions $SideSpecificBorder
 */
class GlobalTableBorderOptions extends Shape
{
    /**
     * @param array{
     *     UniformBorder?: TableBorderOptions,
     *     SideSpecificBorder?: TableSideBorderOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
