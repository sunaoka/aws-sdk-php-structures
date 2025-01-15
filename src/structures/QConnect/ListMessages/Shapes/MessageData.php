<?php

namespace Sunaoka\Aws\Structures\QConnect\ListMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TextMessage|null $text
 */
class MessageData extends Shape
{
    /**
     * @param array{text?: TextMessage|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
