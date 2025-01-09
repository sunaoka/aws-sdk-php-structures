<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListConversations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $conversationId
 * @property string $title
 * @property \Aws\Api\DateTimeResult $startTime
 */
class Conversation extends Shape
{
    /**
     * @param array{
     *     conversationId?: string,
     *     title?: string,
     *     startTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
