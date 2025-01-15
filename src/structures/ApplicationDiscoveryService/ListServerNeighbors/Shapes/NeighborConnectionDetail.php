<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\ListServerNeighbors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceServerId
 * @property string $destinationServerId
 * @property int|null $destinationPort
 * @property string|null $transportProtocol
 * @property int $connectionsCount
 */
class NeighborConnectionDetail extends Shape
{
    /**
     * @param array{
     *     sourceServerId: string,
     *     destinationServerId: string,
     *     destinationPort?: int|null,
     *     transportProtocol?: string|null,
     *     connectionsCount: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
