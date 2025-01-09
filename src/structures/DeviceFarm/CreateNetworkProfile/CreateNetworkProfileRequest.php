<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\CreateNetworkProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectArn
 * @property string $name
 * @property string $description
 * @property 'CURATED'|'PRIVATE' $type
 * @property int $uplinkBandwidthBits
 * @property int $downlinkBandwidthBits
 * @property int $uplinkDelayMs
 * @property int $downlinkDelayMs
 * @property int $uplinkJitterMs
 * @property int $downlinkJitterMs
 * @property int<0, 100> $uplinkLossPercent
 * @property int<0, 100> $downlinkLossPercent
 */
class CreateNetworkProfileRequest extends Request
{
    /**
     * @param array{
     *     projectArn: string,
     *     name: string,
     *     description?: string,
     *     type?: 'CURATED'|'PRIVATE',
     *     uplinkBandwidthBits?: int,
     *     downlinkBandwidthBits?: int,
     *     uplinkDelayMs?: int,
     *     downlinkDelayMs?: int,
     *     uplinkJitterMs?: int,
     *     downlinkJitterMs?: int,
     *     uplinkLossPercent?: int<0, 100>,
     *     downlinkLossPercent?: int<0, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
