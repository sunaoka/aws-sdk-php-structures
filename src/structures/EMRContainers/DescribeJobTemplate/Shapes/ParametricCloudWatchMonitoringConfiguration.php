<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logGroupName
 * @property string $logStreamNamePrefix
 */
class ParametricCloudWatchMonitoringConfiguration extends Shape
{
    /**
     * @param array{
     *     logGroupName?: string,
     *     logStreamNamePrefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
