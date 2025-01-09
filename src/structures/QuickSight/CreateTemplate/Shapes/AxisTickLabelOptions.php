<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LabelOptions $LabelOptions
 * @property double $RotationAngle
 */
class AxisTickLabelOptions extends Shape
{
    /**
     * @param array{
     *     LabelOptions?: LabelOptions,
     *     RotationAngle?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
