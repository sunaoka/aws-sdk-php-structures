<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListPendingMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<UserMessageBlock>|null $userMessage
 * @property list<AssistantMessageBlock>|null $assistantMessage
 */
class Message extends Shape
{
    /**
     * @param array{
     *     userMessage?: list<UserMessageBlock>|null,
     *     assistantMessage?: list<AssistantMessageBlock>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
