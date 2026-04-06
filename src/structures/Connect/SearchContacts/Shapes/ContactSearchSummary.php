<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Id
 * @property string|null $InitialContactId
 * @property string|null $PreviousContactId
 * @property 'INBOUND'|'OUTBOUND'|'TRANSFER'|'QUEUE_TRANSFER'|'CALLBACK'|'API'|'DISCONNECT'|'MONITOR'|'EXTERNAL_OUTBOUND'|null $InitiationMethod
 * @property 'VOICE'|'CHAT'|'TASK'|null $Channel
 * @property ContactSearchSummaryQueueInfo|null $QueueInfo
 * @property ContactSearchSummaryAgentInfo|null $AgentInfo
 * @property \Aws\Api\DateTimeResult|null $InitiationTimestamp
 * @property \Aws\Api\DateTimeResult|null $DisconnectTimestamp
 * @property \Aws\Api\DateTimeResult|null $ScheduledTimestamp
 */
class ContactSearchSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Id?: string|null,
     *     InitialContactId?: string|null,
     *     PreviousContactId?: string|null,
     *     InitiationMethod?: 'INBOUND'|'OUTBOUND'|'TRANSFER'|'QUEUE_TRANSFER'|'CALLBACK'|'API'|'DISCONNECT'|'MONITOR'|'EXTERNAL_OUTBOUND'|null,
     *     Channel?: 'VOICE'|'CHAT'|'TASK'|null,
     *     QueueInfo?: ContactSearchSummaryQueueInfo|null,
     *     AgentInfo?: ContactSearchSummaryAgentInfo|null,
     *     InitiationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     DisconnectTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ScheduledTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
