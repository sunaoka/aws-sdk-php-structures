<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\DescribeSimulation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogsLogGroup $CloudWatchLogsLogGroup
 */
class LogDestination extends Shape
{
    /**
     * @param array{CloudWatchLogsLogGroup?: CloudWatchLogsLogGroup} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
