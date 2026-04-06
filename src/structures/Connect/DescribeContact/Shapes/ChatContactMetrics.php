<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $MultiParty
 * @property int|null $TotalMessages
 * @property int|null $TotalBotMessages
 * @property int|null $TotalBotMessageLengthInChars
 * @property int<0, max>|null $ConversationCloseTimeInMillis
 * @property int|null $ConversationTurnCount
 * @property \Aws\Api\DateTimeResult|null $AgentFirstResponseTimestamp
 * @property int<0, max>|null $AgentFirstResponseTimeInMillis
 */
class ChatContactMetrics extends Shape
{
    /**
     * @param array{
     *     MultiParty?: bool|null,
     *     TotalMessages?: int|null,
     *     TotalBotMessages?: int|null,
     *     TotalBotMessageLengthInChars?: int|null,
     *     ConversationCloseTimeInMillis?: int<0, max>|null,
     *     ConversationTurnCount?: int|null,
     *     AgentFirstResponseTimestamp?: \Aws\Api\DateTimeResult|null,
     *     AgentFirstResponseTimeInMillis?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
