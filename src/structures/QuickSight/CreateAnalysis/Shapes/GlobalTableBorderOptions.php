<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TableBorderOptions|null $UniformBorder
 * @property TableSideBorderOptions|null $SideSpecificBorder
 */
class GlobalTableBorderOptions extends Shape
{
    /**
     * @param array{
     *     UniformBorder?: TableBorderOptions|null,
     *     SideSpecificBorder?: TableSideBorderOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
