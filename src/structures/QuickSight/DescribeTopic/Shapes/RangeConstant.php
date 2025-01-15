<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Minimum
 * @property string|null $Maximum
 */
class RangeConstant extends Shape
{
    /**
     * @param array{
     *     Minimum?: string|null,
     *     Maximum?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
