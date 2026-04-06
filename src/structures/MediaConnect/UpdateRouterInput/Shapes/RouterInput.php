<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $Id
 * @property 'CREATING'|'STANDBY'|'STARTING'|'ACTIVE'|'STOPPING'|'DELETING'|'UPDATING'|'ERROR'|'RECOVERING'|'MIGRATING' $State
 * @property 'STANDARD'|'FAILOVER'|'MERGE'|'MEDIACONNECT_FLOW' $InputType
 * @property RouterInputConfiguration $Configuration
 * @property int $RoutedOutputs
 * @property int|null $MaximumRoutedOutputs
 * @property string $RegionName
 * @property string $AvailabilityZone
 * @property int $MaximumBitrate
 * @property 'INPUT_100'|'INPUT_50'|'INPUT_20' $Tier
 * @property 'REGIONAL'|'GLOBAL' $RoutingScope
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property list<RouterInputMessage> $Messages
 * @property RouterInputTransitEncryption $TransitEncryption
 * @property array<string, string> $Tags
 * @property RouterInputStreamDetails $StreamDetails
 * @property string|null $IpAddress
 * @property 'PREFERRED_DAY_TIME'|'DEFAULT' $MaintenanceType
 * @property MaintenanceConfiguration $MaintenanceConfiguration
 * @property 'WINDOW'|null $MaintenanceScheduleType
 * @property MaintenanceSchedule|null $MaintenanceSchedule
 */
class RouterInput extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Arn: string,
     *     Id: string,
     *     State: 'CREATING'|'STANDBY'|'STARTING'|'ACTIVE'|'STOPPING'|'DELETING'|'UPDATING'|'ERROR'|'RECOVERING'|'MIGRATING',
     *     InputType: 'STANDARD'|'FAILOVER'|'MERGE'|'MEDIACONNECT_FLOW',
     *     Configuration: RouterInputConfiguration,
     *     RoutedOutputs: int,
     *     MaximumRoutedOutputs?: int|null,
     *     RegionName: string,
     *     AvailabilityZone: string,
     *     MaximumBitrate: int,
     *     Tier: 'INPUT_100'|'INPUT_50'|'INPUT_20',
     *     RoutingScope: 'REGIONAL'|'GLOBAL',
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     UpdatedAt: \Aws\Api\DateTimeResult,
     *     Messages: list<RouterInputMessage>,
     *     TransitEncryption: RouterInputTransitEncryption,
     *     Tags: array<string, string>,
     *     StreamDetails: RouterInputStreamDetails,
     *     IpAddress?: string|null,
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
