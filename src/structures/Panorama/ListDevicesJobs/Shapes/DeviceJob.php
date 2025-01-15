<?php

namespace Sunaoka\Aws\Structures\Panorama\ListDevicesJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $DeviceId
 * @property string|null $DeviceName
 * @property string|null $JobId
 * @property 'OTA'|'REBOOT'|null $JobType
 */
class DeviceJob extends Shape
{
    /**
     * @param array{
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     DeviceId?: string|null,
     *     DeviceName?: string|null,
     *     JobId?: string|null,
     *     JobType?: 'OTA'|'REBOOT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
