<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeInstanceRefreshes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $PercentageComplete
 * @property int $InstancesToUpdate
 */
class InstanceRefreshWarmPoolProgress extends Shape
{
    /**
     * @param array{
     *     PercentageComplete?: int,
     *     InstancesToUpdate?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
