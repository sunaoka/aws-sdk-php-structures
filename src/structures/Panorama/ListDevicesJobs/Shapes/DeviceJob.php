<?php

namespace Sunaoka\Aws\Structures\Panorama\ListDevicesJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $DeviceId
 * @property string $DeviceName
 * @property string $JobId
 * @property 'OTA'|'REBOOT' $JobType
 */
class DeviceJob extends Shape
{
    /**
     * @param array{
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     DeviceId?: string,
     *     DeviceName?: string,
     *     JobId?: string,
     *     JobType?: 'OTA'|'REBOOT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
