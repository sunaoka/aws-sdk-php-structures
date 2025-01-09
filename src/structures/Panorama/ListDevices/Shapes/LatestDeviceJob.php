<?php

namespace Sunaoka\Aws\Structures\Panorama\ListDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ImageVersion
 * @property 'OTA'|'REBOOT' $JobType
 * @property 'PENDING'|'IN_PROGRESS'|'VERIFYING'|'REBOOTING'|'DOWNLOADING'|'COMPLETED'|'FAILED' $Status
 */
class LatestDeviceJob extends Shape
{
    /**
     * @param array{
     *     ImageVersion?: string,
     *     JobType?: 'OTA'|'REBOOT',
     *     Status?: 'PENDING'|'IN_PROGRESS'|'VERIFYING'|'REBOOTING'|'DOWNLOADING'|'COMPLETED'|'FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
