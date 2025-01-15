<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListMonitoredResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MonitoredResourceName
 * @property string|null $Type
 * @property 'FULL_PERMISSION'|'MISSING_PERMISSION'|null $ResourcePermission
 * @property \Aws\Api\DateTimeResult|null $LastUpdated
 * @property ResourceCollection|null $ResourceCollection
 */
class MonitoredResourceIdentifier extends Shape
{
    /**
     * @param array{
     *     MonitoredResourceName?: string|null,
     *     Type?: string|null,
     *     ResourcePermission?: 'FULL_PERMISSION'|'MISSING_PERMISSION'|null,
     *     LastUpdated?: \Aws\Api\DateTimeResult|null,
     *     ResourceCollection?: ResourceCollection|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
