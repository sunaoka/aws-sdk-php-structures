<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateMultiplex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MultiplexId
 * @property Shapes\MultiplexSettings $MultiplexSettings
 * @property string $Name
 * @property array<string, Shapes\MultiplexProgramPacketIdentifiersMap> $PacketIdentifiersMapping
 */
class UpdateMultiplexRequest extends Request
{
    /**
     * @param array{
     *     MultiplexId: string,
     *     MultiplexSettings?: Shapes\MultiplexSettings,
     *     Name?: string,
     *     PacketIdentifiersMapping?: array<string, Shapes\MultiplexProgramPacketIdentifiersMap>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
