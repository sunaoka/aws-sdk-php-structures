<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\GetEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Message> $messages
 */
class UnifiedConversationalObject extends Shape
{
    /**
     * @param array{messages: list<Message>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
