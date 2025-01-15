<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListCoreDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $coreDeviceThingName
 * @property 'HEALTHY'|'UNHEALTHY'|null $status
 * @property \Aws\Api\DateTimeResult|null $lastStatusUpdateTimestamp
 * @property string|null $platform
 * @property string|null $architecture
 * @property string|null $runtime
 */
class CoreDevice extends Shape
{
    /**
     * @param array{
     *     coreDeviceThingName?: string|null,
     *     status?: 'HEALTHY'|'UNHEALTHY'|null,
     *     lastStatusUpdateTimestamp?: \Aws\Api\DateTimeResult|null,
     *     platform?: string|null,
     *     architecture?: string|null,
     *     runtime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
