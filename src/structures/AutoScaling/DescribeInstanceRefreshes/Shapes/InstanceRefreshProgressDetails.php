<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeInstanceRefreshes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InstanceRefreshLivePoolProgress|null $LivePoolProgress
 * @property InstanceRefreshWarmPoolProgress|null $WarmPoolProgress
 */
class InstanceRefreshProgressDetails extends Shape
{
    /**
     * @param array{
     *     LivePoolProgress?: InstanceRefreshLivePoolProgress|null,
     *     WarmPoolProgress?: InstanceRefreshWarmPoolProgress|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
