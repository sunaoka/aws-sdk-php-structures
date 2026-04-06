<?php

namespace Sunaoka\Aws\Structures\Chatbot\GetCustomAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CommandText
 */
class CustomActionDefinition extends Shape
{
    /**
     * @param array{CommandText: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
