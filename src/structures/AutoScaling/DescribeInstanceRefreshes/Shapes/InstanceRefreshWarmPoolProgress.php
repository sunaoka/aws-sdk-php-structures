<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeInstanceRefreshes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 100>|null $PercentageComplete
 * @property int<0, max>|null $InstancesToUpdate
 */
class InstanceRefreshWarmPoolProgress extends Shape
{
    /**
     * @param array{
     *     PercentageComplete?: int<0, 100>|null,
     *     InstancesToUpdate?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
