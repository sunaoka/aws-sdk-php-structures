<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $GradientOffset
 * @property double $DataValue
 * @property string $Color
 */
class GradientStop extends Shape
{
    /**
     * @param array{
     *     GradientOffset: double,
     *     DataValue?: double,
     *     Color?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
