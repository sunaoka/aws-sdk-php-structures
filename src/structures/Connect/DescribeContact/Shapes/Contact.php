<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Id
 * @property string|null $InitialContactId
 * @property string|null $PreviousContactId
 * @property 'INBOUND'|'OUTBOUND'|'TRANSFER'|'QUEUE_TRANSFER'|'CALLBACK'|'API'|'DISCONNECT'|'MONITOR'|'EXTERNAL_OUTBOUND'|null $InitiationMethod
 * @property string|null $Name
 * @property string|null $Description
 * @property 'VOICE'|'CHAT'|'TASK'|null $Channel
 * @property QueueInfo|null $QueueInfo
 * @property AgentInfo|null $AgentInfo
 * @property \Aws\Api\DateTimeResult|null $InitiationTimestamp
 * @property \Aws\Api\DateTimeResult|null $DisconnectTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdateTimestamp
 * @property \Aws\Api\DateTimeResult|null $ScheduledTimestamp
 * @property string|null $RelatedContactId
 * @property WisdomInfo|null $WisdomInfo
 */
class Contact extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Id?: string|null,
     *     InitialContactId?: string|null,
     *     PreviousContactId?: string|null,
     *     InitiationMethod?: 'INBOUND'|'OUTBOUND'|'TRANSFER'|'QUEUE_TRANSFER'|'CALLBACK'|'API'|'DISCONNECT'|'MONITOR'|'EXTERNAL_OUTBOUND'|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Channel?: 'VOICE'|'CHAT'|'TASK'|null,
     *     QueueInfo?: QueueInfo|null,
     *     AgentInfo?: AgentInfo|null,
     *     InitiationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     DisconnectTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastUpdateTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ScheduledTimestamp?: \Aws\Api\DateTimeResult|null,
     *     RelatedContactId?: string|null,
     *     WisdomInfo?: WisdomInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
