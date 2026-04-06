<?php

namespace Sunaoka\Aws\Structures\BackupGateway\GetGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GatewayArn
 * @property string|null $GatewayDisplayName
 * @property 'BACKUP_VM'|null $GatewayType
 * @property string|null $HypervisorId
 * @property \Aws\Api\DateTimeResult|null $LastSeenTime
 * @property MaintenanceStartTime|null $MaintenanceStartTime
 * @property \Aws\Api\DateTimeResult|null $NextUpdateAvailabilityTime
 * @property string|null $VpcEndpoint
 */
class GatewayDetails extends Shape
{
    /**
     * @param array{
     *     GatewayArn?: string|null,
     *     GatewayDisplayName?: string|null,
     *     GatewayType?: 'BACKUP_VM'|null,
     *     HypervisorId?: string|null,
     *     LastSeenTime?: \Aws\Api\DateTimeResult|null,
     *     MaintenanceStartTime?: MaintenanceStartTime|null,
     *     NextUpdateAvailabilityTime?: \Aws\Api\DateTimeResult|null,
     *     VpcEndpoint?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
