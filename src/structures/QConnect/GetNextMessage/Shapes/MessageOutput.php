<?php

namespace Sunaoka\Aws\Structures\QConnect\GetNextMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $messageId
 * @property 'CUSTOMER'|'AGENT'|'BOT' $participant
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property MessageData $value
 */
class MessageOutput extends Shape
{
    /**
     * @param array{
     *     messageId: string,
     *     participant: 'CUSTOMER'|'AGENT'|'BOT',
     *     timestamp: \Aws\Api\DateTimeResult,
     *     value: MessageData
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
