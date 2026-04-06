<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\ListEfficiencyMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $start
 * @property string $end
 */
class TimePeriod extends Shape
{
    /**
     * @param array{
     *     start: string,
     *     end: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
