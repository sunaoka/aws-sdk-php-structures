<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\ListServerNeighbors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceServerId
 * @property string $destinationServerId
 * @property int $destinationPort
 * @property string $transportProtocol
 * @property int $connectionsCount
 */
class NeighborConnectionDetail extends Shape
{
    /**
     * @param array{
     *     sourceServerId: string,
     *     destinationServerId: string,
     *     destinationPort?: int,
     *     transportProtocol?: string,
     *     connectionsCount: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
