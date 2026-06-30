<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAlarmsForMetric\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Timezone
 */
class WallClockWindow extends Shape
{
    /**
     * @param array{Timezone?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
