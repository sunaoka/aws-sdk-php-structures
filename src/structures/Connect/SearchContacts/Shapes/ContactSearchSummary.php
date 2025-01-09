<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Id
 * @property string $InitialContactId
 * @property string $PreviousContactId
 * @property 'INBOUND'|'OUTBOUND'|'TRANSFER'|'QUEUE_TRANSFER'|'CALLBACK'|'API'|'DISCONNECT'|'MONITOR'|'EXTERNAL_OUTBOUND'|'WEBRTC_API'|'AGENT_REPLY'|'FLOW' $InitiationMethod
 * @property 'VOICE'|'CHAT'|'TASK'|'EMAIL' $Channel
 * @property ContactSearchSummaryQueueInfo $QueueInfo
 * @property ContactSearchSummaryAgentInfo $AgentInfo
 * @property \Aws\Api\DateTimeResult $InitiationTimestamp
 * @property \Aws\Api\DateTimeResult $DisconnectTimestamp
 * @property \Aws\Api\DateTimeResult $ScheduledTimestamp
 * @property array<string, ContactSearchSummarySegmentAttributeValue> $SegmentAttributes
 */
class ContactSearchSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Id?: string,
     *     InitialContactId?: string,
     *     PreviousContactId?: string,
     *     InitiationMethod?: 'INBOUND'|'OUTBOUND'|'TRANSFER'|'QUEUE_TRANSFER'|'CALLBACK'|'API'|'DISCONNECT'|'MONITOR'|'EXTERNAL_OUTBOUND'|'WEBRTC_API'|'AGENT_REPLY'|'FLOW',
     *     Channel?: 'VOICE'|'CHAT'|'TASK'|'EMAIL',
     *     QueueInfo?: ContactSearchSummaryQueueInfo,
     *     AgentInfo?: ContactSearchSummaryAgentInfo,
     *     InitiationTimestamp?: \Aws\Api\DateTimeResult,
     *     DisconnectTimestamp?: \Aws\Api\DateTimeResult,
     *     ScheduledTimestamp?: \Aws\Api\DateTimeResult,
     *     SegmentAttributes?: array<string, ContactSearchSummarySegmentAttributeValue>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
