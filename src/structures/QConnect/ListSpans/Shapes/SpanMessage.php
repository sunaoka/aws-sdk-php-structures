<?php

namespace Sunaoka\Aws\Structures\QConnect\ListSpans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $messageId
 * @property 'CUSTOMER'|'AGENT'|'BOT' $participant
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property list<SpanMessageValue> $values
 */
class SpanMessage extends Shape
{
    /**
     * @param array{
     *     messageId: string,
     *     participant: 'CUSTOMER'|'AGENT'|'BOT',
     *     timestamp: \Aws\Api\DateTimeResult,
     *     values: list<SpanMessageValue>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
