<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\DescribeSimulation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogsLogGroup|null $CloudWatchLogsLogGroup
 */
class LogDestination extends Shape
{
    /**
     * @param array{CloudWatchLogsLogGroup?: CloudWatchLogsLogGroup|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
