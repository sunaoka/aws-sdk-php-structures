<?php

namespace Sunaoka\Aws\Structures\QConnect\SendMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $botResponse
 * @property string $inputTranscript
 * @property int $turnNumber
 */
class SelfServiceConversationHistory extends Shape
{
    /**
     * @param array{
     *     botResponse?: string,
     *     inputTranscript?: string,
     *     turnNumber: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
