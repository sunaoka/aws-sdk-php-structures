<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\BatchGetEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USER'|'ASSISTANT'|'SYSTEM' $role
 * @property MessageContent $content
 */
class Message extends Shape
{
    /**
     * @param array{
     *     role: 'USER'|'ASSISTANT'|'SYSTEM',
     *     content: MessageContent
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
