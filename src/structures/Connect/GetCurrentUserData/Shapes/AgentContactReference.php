<?php

namespace Sunaoka\Aws\Structures\Connect\GetCurrentUserData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContactId
 * @property 'VOICE'|'CHAT'|'TASK'|'EMAIL'|null $Channel
 * @property 'INBOUND'|'OUTBOUND'|'TRANSFER'|'QUEUE_TRANSFER'|'CALLBACK'|'API'|'DISCONNECT'|'MONITOR'|'EXTERNAL_OUTBOUND'|'WEBRTC_API'|'AGENT_REPLY'|'FLOW'|null $InitiationMethod
 * @property 'INCOMING'|'PENDING'|'CONNECTING'|'CONNECTED'|'CONNECTED_ONHOLD'|'MISSED'|'ERROR'|'ENDED'|'REJECTED'|null $AgentContactState
 * @property \Aws\Api\DateTimeResult|null $StateStartTimestamp
 * @property \Aws\Api\DateTimeResult|null $ConnectedToAgentTimestamp
 * @property QueueReference|null $Queue
 */
class AgentContactReference extends Shape
{
    /**
     * @param array{
     *     ContactId?: string|null,
     *     Channel?: 'VOICE'|'CHAT'|'TASK'|'EMAIL'|null,
     *     InitiationMethod?: 'INBOUND'|'OUTBOUND'|'TRANSFER'|'QUEUE_TRANSFER'|'CALLBACK'|'API'|'DISCONNECT'|'MONITOR'|'EXTERNAL_OUTBOUND'|'WEBRTC_API'|'AGENT_REPLY'|'FLOW'|null,
     *     AgentContactState?: 'INCOMING'|'PENDING'|'CONNECTING'|'CONNECTED'|'CONNECTED_ONHOLD'|'MISSED'|'ERROR'|'ENDED'|'REJECTED'|null,
     *     StateStartTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ConnectedToAgentTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Queue?: QueueReference|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
