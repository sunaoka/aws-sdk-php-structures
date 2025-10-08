<?php

namespace Sunaoka\Aws\Structures\Odb\GetOdbPeeringConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $odbPeeringConnectionId
 * @property string|null $displayName
 * @property 'AVAILABLE'|'FAILED'|'PROVISIONING'|'TERMINATED'|'TERMINATING'|'UPDATING'|'MAINTENANCE_IN_PROGRESS'|null $status
 * @property string|null $statusReason
 * @property string|null $odbPeeringConnectionArn
 * @property string|null $odbNetworkArn
 * @property string|null $peerNetworkArn
 * @property string|null $odbPeeringConnectionType
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property float|null $percentProgress
 */
class OdbPeeringConnection extends Shape
{
    /**
     * @param array{
     *     odbPeeringConnectionId: string,
     *     displayName?: string|null,
     *     status?: 'AVAILABLE'|'FAILED'|'PROVISIONING'|'TERMINATED'|'TERMINATING'|'UPDATING'|'MAINTENANCE_IN_PROGRESS'|null,
     *     statusReason?: string|null,
     *     odbPeeringConnectionArn?: string|null,
     *     odbNetworkArn?: string|null,
     *     peerNetworkArn?: string|null,
     *     odbPeeringConnectionType?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     percentProgress?: float|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
