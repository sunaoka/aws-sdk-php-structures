<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EstimatedResourceSize $size
 */
class ChannelStatistics extends Shape
{
    /**
     * @param array{size?: EstimatedResourceSize} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
