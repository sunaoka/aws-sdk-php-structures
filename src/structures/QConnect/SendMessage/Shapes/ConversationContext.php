<?php

namespace Sunaoka\Aws\Structures\QConnect\SendMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SelfServiceConversationHistory> $selfServiceConversationHistory
 */
class ConversationContext extends Shape
{
    /**
     * @param array{selfServiceConversationHistory: list<SelfServiceConversationHistory>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
