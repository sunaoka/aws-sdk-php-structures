<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeInstanceRefreshes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InstanceRefreshLivePoolProgress $LivePoolProgress
 * @property InstanceRefreshWarmPoolProgress $WarmPoolProgress
 */
class InstanceRefreshProgressDetails extends Shape
{
    /**
     * @param array{
     *     LivePoolProgress?: InstanceRefreshLivePoolProgress,
     *     WarmPoolProgress?: InstanceRefreshWarmPoolProgress
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
