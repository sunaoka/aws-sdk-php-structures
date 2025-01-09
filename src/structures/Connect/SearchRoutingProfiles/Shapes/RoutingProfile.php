<?php

namespace Sunaoka\Aws\Structures\Connect\SearchRoutingProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property string $Name
 * @property string $RoutingProfileArn
 * @property string $RoutingProfileId
 * @property string $Description
 * @property list<MediaConcurrency> $MediaConcurrencies
 * @property string $DefaultOutboundQueueId
 * @property array<string, string> $Tags
 * @property int $NumberOfAssociatedQueues
 * @property int $NumberOfAssociatedUsers
 * @property 'TIME_SINCE_LAST_ACTIVITY'|'TIME_SINCE_LAST_INBOUND' $AgentAvailabilityTimer
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $LastModifiedRegion
 * @property bool $IsDefault
 * @property list<string> $AssociatedQueueIds
 */
class RoutingProfile extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string,
     *     Name?: string,
     *     RoutingProfileArn?: string,
     *     RoutingProfileId?: string,
     *     Description?: string,
     *     MediaConcurrencies?: list<MediaConcurrency>,
     *     DefaultOutboundQueueId?: string,
     *     Tags?: array<string, string>,
     *     NumberOfAssociatedQueues?: int,
     *     NumberOfAssociatedUsers?: int,
     *     AgentAvailabilityTimer?: 'TIME_SINCE_LAST_ACTIVITY'|'TIME_SINCE_LAST_INBOUND',
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedRegion?: string,
     *     IsDefault?: bool,
     *     AssociatedQueueIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
