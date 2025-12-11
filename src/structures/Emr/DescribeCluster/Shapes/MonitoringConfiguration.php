<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogConfiguration|null $CloudWatchLogConfiguration
 */
class MonitoringConfiguration extends Shape
{
    /**
     * @param array{CloudWatchLogConfiguration?: CloudWatchLogConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
