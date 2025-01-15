<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ImageVersion
 * @property 'OTA'|'REBOOT'|null $JobType
 * @property 'PENDING'|'IN_PROGRESS'|'VERIFYING'|'REBOOTING'|'DOWNLOADING'|'COMPLETED'|'FAILED'|null $Status
 */
class LatestDeviceJob extends Shape
{
    /**
     * @param array{
     *     ImageVersion?: string|null,
     *     JobType?: 'OTA'|'REBOOT'|null,
     *     Status?: 'PENDING'|'IN_PROGRESS'|'VERIFYING'|'REBOOTING'|'DOWNLOADING'|'COMPLETED'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
