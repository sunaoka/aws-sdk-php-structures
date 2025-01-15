<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PositiveBarColor
 * @property string|null $NegativeBarColor
 * @property string|null $TotalBarColor
 */
class WaterfallChartGroupColorConfiguration extends Shape
{
    /**
     * @param array{
     *     PositiveBarColor?: string|null,
     *     NegativeBarColor?: string|null,
     *     TotalBarColor?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
