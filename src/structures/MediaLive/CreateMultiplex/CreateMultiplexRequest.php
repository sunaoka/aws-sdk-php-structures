<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateMultiplex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AvailabilityZones
 * @property Shapes\MultiplexSettings $MultiplexSettings
 * @property string $Name
 * @property string $RequestId
 * @property array<string, string> $Tags
 */
class CreateMultiplexRequest extends Request
{
    /**
     * @param array{
     *     AvailabilityZones: list<string>,
     *     MultiplexSettings: Shapes\MultiplexSettings,
     *     Name: string,
     *     RequestId: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
