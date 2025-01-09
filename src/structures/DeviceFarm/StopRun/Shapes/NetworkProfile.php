<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\StopRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $description
 * @property 'CURATED'|'PRIVATE' $type
 * @property int $uplinkBandwidthBits
 * @property int $downlinkBandwidthBits
 * @property int $uplinkDelayMs
 * @property int $downlinkDelayMs
 * @property int $uplinkJitterMs
 * @property int $downlinkJitterMs
 * @property int $uplinkLossPercent
 * @property int $downlinkLossPercent
 */
class NetworkProfile extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     description?: string,
     *     type?: 'CURATED'|'PRIVATE',
     *     uplinkBandwidthBits?: int,
     *     downlinkBandwidthBits?: int,
     *     uplinkDelayMs?: int,
     *     downlinkDelayMs?: int,
     *     uplinkJitterMs?: int,
     *     downlinkJitterMs?: int,
     *     uplinkLossPercent?: int,
     *     downlinkLossPercent?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
