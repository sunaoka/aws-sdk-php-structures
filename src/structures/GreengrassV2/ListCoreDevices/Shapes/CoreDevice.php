<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListCoreDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $coreDeviceThingName
 * @property 'HEALTHY'|'UNHEALTHY'|null $status
 * @property \Aws\Api\DateTimeResult|null $lastStatusUpdateTimestamp
 */
class CoreDevice extends Shape
{
    /**
     * @param array{
     *     coreDeviceThingName?: string|null,
     *     status?: 'HEALTHY'|'UNHEALTHY'|null,
     *     lastStatusUpdateTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
