<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ScheduleRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $description
 * @property 'CURATED'|'PRIVATE'|null $type
 * @property int|null $uplinkBandwidthBits
 * @property int|null $downlinkBandwidthBits
 * @property int|null $uplinkDelayMs
 * @property int|null $downlinkDelayMs
 * @property int|null $uplinkJitterMs
 * @property int|null $downlinkJitterMs
 * @property int<0, 100>|null $uplinkLossPercent
 * @property int<0, 100>|null $downlinkLossPercent
 */
class NetworkProfile extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     type?: 'CURATED'|'PRIVATE'|null,
     *     uplinkBandwidthBits?: int|null,
     *     downlinkBandwidthBits?: int|null,
     *     uplinkDelayMs?: int|null,
     *     downlinkDelayMs?: int|null,
     *     uplinkJitterMs?: int|null,
     *     downlinkJitterMs?: int|null,
     *     uplinkLossPercent?: int<0, 100>|null,
     *     downlinkLossPercent?: int<0, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
