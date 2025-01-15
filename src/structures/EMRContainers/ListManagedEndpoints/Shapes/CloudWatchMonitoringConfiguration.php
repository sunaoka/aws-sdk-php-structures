<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListManagedEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logGroupName
 * @property string|null $logStreamNamePrefix
 */
class CloudWatchMonitoringConfiguration extends Shape
{
    /**
     * @param array{
     *     logGroupName: string,
     *     logStreamNamePrefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
