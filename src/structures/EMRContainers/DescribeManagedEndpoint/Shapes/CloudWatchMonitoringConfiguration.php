<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeManagedEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logGroupName
 * @property string $logStreamNamePrefix
 */
class CloudWatchMonitoringConfiguration extends Shape
{
    /**
     * @param array{
     *     logGroupName: string,
     *     logStreamNamePrefix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
