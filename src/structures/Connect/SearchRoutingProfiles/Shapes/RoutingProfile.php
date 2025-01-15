<?php

namespace Sunaoka\Aws\Structures\Connect\SearchRoutingProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceId
 * @property string|null $Name
 * @property string|null $RoutingProfileArn
 * @property string|null $RoutingProfileId
 * @property string|null $Description
 * @property list<MediaConcurrency>|null $MediaConcurrencies
 * @property string|null $DefaultOutboundQueueId
 * @property array<string, string>|null $Tags
 * @property int|null $NumberOfAssociatedQueues
 * @property int|null $NumberOfAssociatedUsers
 * @property 'TIME_SINCE_LAST_ACTIVITY'|'TIME_SINCE_LAST_INBOUND'|null $AgentAvailabilityTimer
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $LastModifiedRegion
 * @property bool|null $IsDefault
 * @property list<string>|null $AssociatedQueueIds
 */
class RoutingProfile extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     Name?: string|null,
     *     RoutingProfileArn?: string|null,
     *     RoutingProfileId?: string|null,
     *     Description?: string|null,
     *     MediaConcurrencies?: list<MediaConcurrency>|null,
     *     DefaultOutboundQueueId?: string|null,
     *     Tags?: array<string, string>|null,
     *     NumberOfAssociatedQueues?: int|null,
     *     NumberOfAssociatedUsers?: int|null,
     *     AgentAvailabilityTimer?: 'TIME_SINCE_LAST_ACTIVITY'|'TIME_SINCE_LAST_INBOUND'|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedRegion?: string|null,
     *     IsDefault?: bool|null,
     *     AssociatedQueueIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
