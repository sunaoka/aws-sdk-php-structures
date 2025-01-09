<?php

namespace Sunaoka\Aws\Structures\Connect\GetCurrentUserData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContactId
 * @property 'VOICE'|'CHAT'|'TASK'|'EMAIL' $Channel
 * @property 'INBOUND'|'OUTBOUND'|'TRANSFER'|'QUEUE_TRANSFER'|'CALLBACK'|'API'|'DISCONNECT'|'MONITOR'|'EXTERNAL_OUTBOUND'|'WEBRTC_API'|'AGENT_REPLY'|'FLOW' $InitiationMethod
 * @property 'INCOMING'|'PENDING'|'CONNECTING'|'CONNECTED'|'CONNECTED_ONHOLD'|'MISSED'|'ERROR'|'ENDED'|'REJECTED' $AgentContactState
 * @property \Aws\Api\DateTimeResult $StateStartTimestamp
 * @property \Aws\Api\DateTimeResult $ConnectedToAgentTimestamp
 * @property QueueReference $Queue
 */
class AgentContactReference extends Shape
{
    /**
     * @param array{
     *     ContactId?: string,
     *     Channel?: 'VOICE'|'CHAT'|'TASK'|'EMAIL',
     *     InitiationMethod?: 'INBOUND'|'OUTBOUND'|'TRANSFER'|'QUEUE_TRANSFER'|'CALLBACK'|'API'|'DISCONNECT'|'MONITOR'|'EXTERNAL_OUTBOUND'|'WEBRTC_API'|'AGENT_REPLY'|'FLOW',
     *     AgentContactState?: 'INCOMING'|'PENDING'|'CONNECTING'|'CONNECTED'|'CONNECTED_ONHOLD'|'MISSED'|'ERROR'|'ENDED'|'REJECTED',
     *     StateStartTimestamp?: \Aws\Api\DateTimeResult,
     *     ConnectedToAgentTimestamp?: \Aws\Api\DateTimeResult,
     *     Queue?: QueueReference
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
