<?php

namespace Sunaoka\Aws\Structures\Connect\StartChatContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContentType
 * @property string $Content
 */
class ChatMessage extends Shape
{
    /**
     * @param array{
     *     ContentType: string,
     *     Content: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
