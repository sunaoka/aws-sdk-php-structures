<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $GradientOffset
 * @property double|null $DataValue
 * @property string|null $Color
 */
class GradientStop extends Shape
{
    /**
     * @param array{
     *     GradientOffset: double,
     *     DataValue?: double|null,
     *     Color?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
