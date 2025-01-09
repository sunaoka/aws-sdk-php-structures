<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListMonitoredResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MonitoredResourceName
 * @property string $Type
 * @property 'FULL_PERMISSION'|'MISSING_PERMISSION' $ResourcePermission
 * @property \Aws\Api\DateTimeResult $LastUpdated
 * @property ResourceCollection $ResourceCollection
 */
class MonitoredResourceIdentifier extends Shape
{
    /**
     * @param array{
     *     MonitoredResourceName?: string,
     *     Type?: string,
     *     ResourcePermission?: 'FULL_PERMISSION'|'MISSING_PERMISSION',
     *     LastUpdated?: \Aws\Api\DateTimeResult,
     *     ResourceCollection?: ResourceCollection
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
