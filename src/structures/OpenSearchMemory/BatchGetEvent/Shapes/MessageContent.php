<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\BatchGetEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $text
 */
class MessageContent extends Shape
{
    /**
     * @param array{text: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
