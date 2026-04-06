<?php

namespace Sunaoka\Aws\Structures\QConnect\SendMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MessageData $value
 */
class MessageInput extends Shape
{
    /**
     * @param array{value: MessageData} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
