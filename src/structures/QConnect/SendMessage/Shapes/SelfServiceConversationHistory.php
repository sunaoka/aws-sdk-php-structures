<?php

namespace Sunaoka\Aws\Structures\QConnect\SendMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $turnNumber
 * @property string|null $inputTranscript
 * @property string|null $botResponse
 * @property \Aws\Api\DateTimeResult|null $timestamp
 */
class SelfServiceConversationHistory extends Shape
{
    /**
     * @param array{
     *     turnNumber?: int|null,
     *     inputTranscript?: string|null,
     *     botResponse?: string|null,
     *     timestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
