<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LabelOptions|null $LabelOptions
 * @property double|null $RotationAngle
 */
class AxisTickLabelOptions extends Shape
{
    /**
     * @param array{
     *     LabelOptions?: LabelOptions|null,
     *     RotationAngle?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
