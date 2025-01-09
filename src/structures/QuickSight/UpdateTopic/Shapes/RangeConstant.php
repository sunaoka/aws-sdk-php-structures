<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Minimum
 * @property string $Maximum
 */
class RangeConstant extends Shape
{
    /**
     * @param array{
     *     Minimum?: string,
     *     Maximum?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
