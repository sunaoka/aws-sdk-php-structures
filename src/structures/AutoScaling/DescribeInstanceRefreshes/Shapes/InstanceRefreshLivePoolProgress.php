<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeInstanceRefreshes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 100> $PercentageComplete
 * @property int<0, max> $InstancesToUpdate
 */
class InstanceRefreshLivePoolProgress extends Shape
{
    /**
     * @param array{
     *     PercentageComplete?: int<0, 100>,
     *     InstancesToUpdate?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
