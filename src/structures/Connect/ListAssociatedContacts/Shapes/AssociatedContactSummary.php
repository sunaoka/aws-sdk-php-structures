<?php

namespace Sunaoka\Aws\Structures\Connect\ListAssociatedContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContactId
 * @property string $ContactArn
 * @property \Aws\Api\DateTimeResult $InitiationTimestamp
 * @property \Aws\Api\DateTimeResult $DisconnectTimestamp
 * @property string $InitialContactId
 * @property string $PreviousContactId
 * @property string $RelatedContactId
 * @property 'INBOUND'|'OUTBOUND'|'TRANSFER'|'QUEUE_TRANSFER'|'CALLBACK'|'API'|'DISCONNECT'|'MONITOR'|'EXTERNAL_OUTBOUND'|'WEBRTC_API'|'AGENT_REPLY'|'FLOW' $InitiationMethod
 * @property 'VOICE'|'CHAT'|'TASK'|'EMAIL' $Channel
 */
class AssociatedContactSummary extends Shape
{
    /**
     * @param array{
     *     ContactId?: string,
     *     ContactArn?: string,
     *     InitiationTimestamp?: \Aws\Api\DateTimeResult,
     *     DisconnectTimestamp?: \Aws\Api\DateTimeResult,
     *     InitialContactId?: string,
     *     PreviousContactId?: string,
     *     RelatedContactId?: string,
     *     InitiationMethod?: 'INBOUND'|'OUTBOUND'|'TRANSFER'|'QUEUE_TRANSFER'|'CALLBACK'|'API'|'DISCONNECT'|'MONITOR'|'EXTERNAL_OUTBOUND'|'WEBRTC_API'|'AGENT_REPLY'|'FLOW',
     *     Channel?: 'VOICE'|'CHAT'|'TASK'|'EMAIL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
