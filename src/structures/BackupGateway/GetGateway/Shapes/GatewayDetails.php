<?php

namespace Sunaoka\Aws\Structures\BackupGateway\GetGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GatewayArn
 * @property string $GatewayDisplayName
 * @property 'BACKUP_VM' $GatewayType
 * @property string $HypervisorId
 * @property \Aws\Api\DateTimeResult $LastSeenTime
 * @property MaintenanceStartTime $MaintenanceStartTime
 * @property \Aws\Api\DateTimeResult $NextUpdateAvailabilityTime
 * @property string $VpcEndpoint
 */
class GatewayDetails extends Shape
{
    /**
     * @param array{
     *     GatewayArn?: string,
     *     GatewayDisplayName?: string,
     *     GatewayType?: 'BACKUP_VM',
     *     HypervisorId?: string,
     *     LastSeenTime?: \Aws\Api\DateTimeResult,
     *     MaintenanceStartTime?: MaintenanceStartTime,
     *     NextUpdateAvailabilityTime?: \Aws\Api\DateTimeResult,
     *     VpcEndpoint?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
