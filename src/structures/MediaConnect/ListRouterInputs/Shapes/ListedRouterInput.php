<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListRouterInputs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $Id
 * @property 'STANDARD'|'FAILOVER'|'MERGE'|'MEDIACONNECT_FLOW' $InputType
 * @property 'CREATING'|'STANDBY'|'STARTING'|'ACTIVE'|'STOPPING'|'DELETING'|'UPDATING'|'ERROR'|'RECOVERING'|'MIGRATING' $State
 * @property int $RoutedOutputs
 * @property string $RegionName
 * @property string $AvailabilityZone
 * @property int $MaximumBitrate
 * @property 'REGIONAL'|'GLOBAL' $RoutingScope
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property int $MessageCount
 * @property string|null $NetworkInterfaceArn
 * @property 'WINDOW'|null $MaintenanceScheduleType
 * @property MaintenanceSchedule|null $MaintenanceSchedule
 */
class ListedRouterInput extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Arn: string,
     *     Id: string,
     *     InputType: 'STANDARD'|'FAILOVER'|'MERGE'|'MEDIACONNECT_FLOW',
     *     State: 'CREATING'|'STANDBY'|'STARTING'|'ACTIVE'|'STOPPING'|'DELETING'|'UPDATING'|'ERROR'|'RECOVERING'|'MIGRATING',
     *     RoutedOutputs: int,
     *     RegionName: string,
     *     AvailabilityZone: string,
     *     MaximumBitrate: int,
     *     RoutingScope: 'REGIONAL'|'GLOBAL',
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     UpdatedAt: \Aws\Api\DateTimeResult,
     *     MessageCount: int,
     *     NetworkInterfaceArn?: string|null,
     *     MaintenanceScheduleType?: 'WINDOW'|null,
     *     MaintenanceSchedule?: MaintenanceSchedule|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
