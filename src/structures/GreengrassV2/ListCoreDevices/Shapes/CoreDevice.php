<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListCoreDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $coreDeviceThingName
 * @property 'HEALTHY'|'UNHEALTHY' $status
 * @property \Aws\Api\DateTimeResult $lastStatusUpdateTimestamp
 * @property string $platform
 * @property string $architecture
 * @property string $runtime
 */
class CoreDevice extends Shape
{
    /**
     * @param array{
     *     coreDeviceThingName?: string,
     *     status?: 'HEALTHY'|'UNHEALTHY',
     *     lastStatusUpdateTimestamp?: \Aws\Api\DateTimeResult,
     *     platform?: string,
     *     architecture?: string,
     *     runtime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
