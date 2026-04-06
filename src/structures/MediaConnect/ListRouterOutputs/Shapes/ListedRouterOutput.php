<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListRouterOutputs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $Id
 * @property 'STANDARD'|'MEDIACONNECT_FLOW'|'MEDIALIVE_INPUT' $OutputType
 * @property 'CREATING'|'STANDBY'|'STARTING'|'ACTIVE'|'STOPPING'|'DELETING'|'UPDATING'|'ERROR'|'RECOVERING'|'MIGRATING' $State
 * @property 'ROUTED'|'ROUTING'|'UNROUTED' $RoutedState
 * @property string $RegionName
 * @property string $AvailabilityZone
 * @property int $MaximumBitrate
 * @property 'REGIONAL'|'GLOBAL' $RoutingScope
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property int $MessageCount
 * @property string|null $RoutedInputArn
 * @property string|null $NetworkInterfaceArn
 * @property 'WINDOW'|null $MaintenanceScheduleType
 * @property MaintenanceSchedule|null $MaintenanceSchedule
 */
class ListedRouterOutput extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Arn: string,
     *     Id: string,
     *     OutputType: 'STANDARD'|'MEDIACONNECT_FLOW'|'MEDIALIVE_INPUT',
     *     State: 'CREATING'|'STANDBY'|'STARTING'|'ACTIVE'|'STOPPING'|'DELETING'|'UPDATING'|'ERROR'|'RECOVERING'|'MIGRATING',
     *     RoutedState: 'ROUTED'|'ROUTING'|'UNROUTED',
     *     RegionName: string,
     *     AvailabilityZone: string,
     *     MaximumBitrate: int,
     *     RoutingScope: 'REGIONAL'|'GLOBAL',
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     UpdatedAt: \Aws\Api\DateTimeResult,
     *     MessageCount: int,
     *     RoutedInputArn?: string|null,
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
