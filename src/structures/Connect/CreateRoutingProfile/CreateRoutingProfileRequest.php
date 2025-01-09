<?php

namespace Sunaoka\Aws\Structures\Connect\CreateRoutingProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $Name
 * @property string $Description
 * @property string $DefaultOutboundQueueId
 * @property list<Shapes\RoutingProfileQueueConfig> $QueueConfigs
 * @property list<Shapes\MediaConcurrency> $MediaConcurrencies
 * @property array<string, string> $Tags
 * @property 'TIME_SINCE_LAST_ACTIVITY'|'TIME_SINCE_LAST_INBOUND' $AgentAvailabilityTimer
 */
class CreateRoutingProfileRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Name: string,
     *     Description: string,
     *     DefaultOutboundQueueId: string,
     *     QueueConfigs?: list<Shapes\RoutingProfileQueueConfig>,
     *     MediaConcurrencies: list<Shapes\MediaConcurrency>,
     *     Tags?: array<string, string>,
     *     AgentAvailabilityTimer?: 'TIME_SINCE_LAST_ACTIVITY'|'TIME_SINCE_LAST_INBOUND'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
