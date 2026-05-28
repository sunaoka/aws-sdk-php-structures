<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'user'|'assistant'|'system' $role
 */
class MessageStartEvent extends Shape
{
    /**
     * @param array{role: 'user'|'assistant'|'system'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
