<?php

namespace Sunaoka\Aws\Structures\QConnect\GetNextMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MessageData $value
 * @property string $messageId
 * @property 'CUSTOMER'|'AGENT'|'BOT' $participant
 * @property \Aws\Api\DateTimeResult $timestamp
 */
class MessageOutput extends Shape
{
    /**
     * @param array{
     *     value: MessageData,
     *     messageId: string,
     *     participant: 'CUSTOMER'|'AGENT'|'BOT',
     *     timestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
