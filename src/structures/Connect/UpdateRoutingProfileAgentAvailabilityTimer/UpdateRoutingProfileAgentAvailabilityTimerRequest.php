<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateRoutingProfileAgentAvailabilityTimer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $RoutingProfileId
 * @property 'TIME_SINCE_LAST_ACTIVITY'|'TIME_SINCE_LAST_INBOUND' $AgentAvailabilityTimer
 */
class UpdateRoutingProfileAgentAvailabilityTimerRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     RoutingProfileId: string,
     *     AgentAvailabilityTimer: 'TIME_SINCE_LAST_ACTIVITY'|'TIME_SINCE_LAST_INBOUND'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
