<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListConversations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $conversationId
 * @property string|null $title
 * @property \Aws\Api\DateTimeResult|null $startTime
 */
class Conversation extends Shape
{
    /**
     * @param array{
     *     conversationId?: string|null,
     *     title?: string|null,
     *     startTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
