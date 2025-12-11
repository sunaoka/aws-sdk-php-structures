<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $Id
 * @property 'CREATING'|'STANDBY'|'STARTING'|'ACTIVE'|'STOPPING'|'DELETING'|'UPDATING'|'ERROR'|'RECOVERING'|'MIGRATING' $State
 * @property 'STANDARD'|'MEDIACONNECT_FLOW'|'MEDIALIVE_INPUT' $OutputType
 * @property RouterOutputConfiguration $Configuration
 * @property 'ROUTED'|'ROUTING'|'UNROUTED' $RoutedState
 * @property string $RegionName
 * @property string $AvailabilityZone
 * @property int $MaximumBitrate
 * @property 'REGIONAL'|'GLOBAL' $RoutingScope
 * @property 'OUTPUT_100'|'OUTPUT_50'|'OUTPUT_20' $Tier
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property list<RouterOutputMessage> $Messages
 * @property array<string, string> $Tags
 * @property RouterOutputStreamDetails $StreamDetails
 * @property string|null $IpAddress
 * @property string|null $RoutedInputArn
 * @property 'PREFERRED_DAY_TIME'|'DEFAULT' $MaintenanceType
 * @property MaintenanceConfiguration $MaintenanceConfiguration
 * @property 'WINDOW'|null $MaintenanceScheduleType
 * @property MaintenanceSchedule|null $MaintenanceSchedule
 */
class RouterOutput extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Arn: string,
     *     Id: string,
     *     State: 'CREATING'|'STANDBY'|'STARTING'|'ACTIVE'|'STOPPING'|'DELETING'|'UPDATING'|'ERROR'|'RECOVERING'|'MIGRATING',
     *     OutputType: 'STANDARD'|'MEDIACONNECT_FLOW'|'MEDIALIVE_INPUT',
     *     Configuration: RouterOutputConfiguration,
     *     RoutedState: 'ROUTED'|'ROUTING'|'UNROUTED',
     *     RegionName: string,
     *     AvailabilityZone: string,
     *     MaximumBitrate: int,
     *     RoutingScope: 'REGIONAL'|'GLOBAL',
     *     Tier: 'OUTPUT_100'|'OUTPUT_50'|'OUTPUT_20',
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     UpdatedAt: \Aws\Api\DateTimeResult,
     *     Messages: list<RouterOutputMessage>,
     *     Tags: array<string, string>,
     *     StreamDetails: RouterOutputStreamDetails,
     *     IpAddress?: string|null,
     *     RoutedInputArn?: string|null,
     *     MaintenanceType: 'PREFERRED_DAY_TIME'|'DEFAULT',
     *     MaintenanceConfiguration: MaintenanceConfiguration,
     *     MaintenanceScheduleType?: 'WINDOW'|null,
     *     MaintenanceSchedule?: MaintenanceSchedule|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
