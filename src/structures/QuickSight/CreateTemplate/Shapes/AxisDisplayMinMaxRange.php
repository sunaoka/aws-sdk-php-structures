<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Minimum
 * @property double|null $Maximum
 */
class AxisDisplayMinMaxRange extends Shape
{
    /**
     * @param array{
     *     Minimum?: double|null,
     *     Maximum?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
