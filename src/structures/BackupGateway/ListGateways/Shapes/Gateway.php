<?php

namespace Sunaoka\Aws\Structures\BackupGateway\ListGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GatewayArn
 * @property string|null $GatewayDisplayName
 * @property 'BACKUP_VM'|null $GatewayType
 * @property string|null $HypervisorId
 * @property \Aws\Api\DateTimeResult|null $LastSeenTime
 */
class Gateway extends Shape
{
    /**
     * @param array{
     *     GatewayArn?: string|null,
     *     GatewayDisplayName?: string|null,
     *     GatewayType?: 'BACKUP_VM'|null,
     *     HypervisorId?: string|null,
     *     LastSeenTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
