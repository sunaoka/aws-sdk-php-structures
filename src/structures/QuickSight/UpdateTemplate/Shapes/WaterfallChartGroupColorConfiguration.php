<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PositiveBarColor
 * @property string $NegativeBarColor
 * @property string $TotalBarColor
 */
class WaterfallChartGroupColorConfiguration extends Shape
{
    /**
     * @param array{
     *     PositiveBarColor?: string,
     *     NegativeBarColor?: string,
     *     TotalBarColor?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
