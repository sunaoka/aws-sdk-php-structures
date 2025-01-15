<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $logGroupName
 * @property string|null $logStreamNamePrefix
 */
class ParametricCloudWatchMonitoringConfiguration extends Shape
{
    /**
     * @param array{
     *     logGroupName?: string|null,
     *     logStreamNamePrefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
