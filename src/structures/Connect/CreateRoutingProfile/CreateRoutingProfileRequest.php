<?php

namespace Sunaoka\Aws\Structures\Connect\CreateRoutingProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $Name
 * @property string $Description
 * @property string $DefaultOutboundQueueId
 * @property list<Shapes\RoutingProfileQueueConfig>|null $QueueConfigs
 * @property list<Shapes\RoutingProfileManualAssignmentQueueConfig>|null $ManualAssignmentQueueConfigs
 * @property list<Shapes\MediaConcurrency> $MediaConcurrencies
 * @property array<string, string>|null $Tags
 * @property 'TIME_SINCE_LAST_ACTIVITY'|'TIME_SINCE_LAST_INBOUND'|null $AgentAvailabilityTimer
 */
class CreateRoutingProfileRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Name: string,
     *     Description: string,
     *     DefaultOutboundQueueId: string,
     *     QueueConfigs?: list<Shapes\RoutingProfileQueueConfig>|null,
     *     ManualAssignmentQueueConfigs?: list<Shapes\RoutingProfileManualAssignmentQueueConfig>|null,
     *     MediaConcurrencies: list<Shapes\MediaConcurrency>,
     *     Tags?: array<string, string>|null,
     *     AgentAvailabilityTimer?: 'TIME_SINCE_LAST_ACTIVITY'|'TIME_SINCE_LAST_INBOUND'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
