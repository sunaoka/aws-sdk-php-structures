<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EstimatedResourceSize|null $size
 */
class ChannelStatistics extends Shape
{
    /**
     * @param array{size?: EstimatedResourceSize|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
