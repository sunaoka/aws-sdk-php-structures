<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ParticipantId
 * @property 'ALL'|'MANAGER'|'AGENT'|'CUSTOMER'|'THIRDPARTY'|null $ParticipantType
 * @property bool|null $ConversationAbandon
 * @property int|null $MessagesSent
 * @property int|null $NumResponses
 * @property int|null $MessageLengthInChars
 * @property int<0, max>|null $TotalResponseTimeInMillis
 * @property int<0, max>|null $MaxResponseTimeInMillis
 * @property \Aws\Api\DateTimeResult|null $LastMessageTimestamp
 */
class ParticipantMetrics extends Shape
{
    /**
     * @param array{
     *     ParticipantId?: string|null,
     *     ParticipantType?: 'ALL'|'MANAGER'|'AGENT'|'CUSTOMER'|'THIRDPARTY'|null,
     *     ConversationAbandon?: bool|null,
     *     MessagesSent?: int|null,
     *     NumResponses?: int|null,
     *     MessageLengthInChars?: int|null,
     *     TotalResponseTimeInMillis?: int<0, max>|null,
     *     MaxResponseTimeInMillis?: int<0, max>|null,
     *     LastMessageTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
