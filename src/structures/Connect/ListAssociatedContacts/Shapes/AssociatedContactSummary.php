<?php

namespace Sunaoka\Aws\Structures\Connect\ListAssociatedContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContactId
 * @property string|null $ContactArn
 * @property \Aws\Api\DateTimeResult|null $InitiationTimestamp
 * @property \Aws\Api\DateTimeResult|null $DisconnectTimestamp
 * @property string|null $InitialContactId
 * @property string|null $PreviousContactId
 * @property string|null $RelatedContactId
 * @property 'INBOUND'|'OUTBOUND'|'TRANSFER'|'QUEUE_TRANSFER'|'CALLBACK'|'API'|'DISCONNECT'|'MONITOR'|'EXTERNAL_OUTBOUND'|'WEBRTC_API'|'AGENT_REPLY'|'FLOW'|null $InitiationMethod
 * @property 'VOICE'|'CHAT'|'TASK'|'EMAIL'|null $Channel
 */
class AssociatedContactSummary extends Shape
{
    /**
     * @param array{
     *     ContactId?: string|null,
     *     ContactArn?: string|null,
     *     InitiationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     DisconnectTimestamp?: \Aws\Api\DateTimeResult|null,
     *     InitialContactId?: string|null,
     *     PreviousContactId?: string|null,
     *     RelatedContactId?: string|null,
     *     InitiationMethod?: 'INBOUND'|'OUTBOUND'|'TRANSFER'|'QUEUE_TRANSFER'|'CALLBACK'|'API'|'DISCONNECT'|'MONITOR'|'EXTERNAL_OUTBOUND'|'WEBRTC_API'|'AGENT_REPLY'|'FLOW'|null,
     *     Channel?: 'VOICE'|'CHAT'|'TASK'|'EMAIL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
