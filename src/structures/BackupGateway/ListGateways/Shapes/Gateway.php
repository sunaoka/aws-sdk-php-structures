<?php

namespace Sunaoka\Aws\Structures\BackupGateway\ListGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GatewayArn
 * @property string $GatewayDisplayName
 * @property 'BACKUP_VM' $GatewayType
 * @property string $HypervisorId
 * @property \Aws\Api\DateTimeResult $LastSeenTime
 */
class Gateway extends Shape
{
    /**
     * @param array{
     *     GatewayArn?: string,
     *     GatewayDisplayName?: string,
     *     GatewayType?: 'BACKUP_VM',
     *     HypervisorId?: string,
     *     LastSeenTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
