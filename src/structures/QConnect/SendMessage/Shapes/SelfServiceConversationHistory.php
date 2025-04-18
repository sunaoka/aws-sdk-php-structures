<?php

namespace Sunaoka\Aws\Structures\QConnect\SendMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $turnNumber
 * @property string|null $inputTranscript
 * @property string|null $botResponse
 */
class SelfServiceConversationHistory extends Shape
{
    /**
     * @param array{
     *     turnNumber: int,
     *     inputTranscript?: string|null,
     *     botResponse?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
