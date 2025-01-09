<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\IsAuthorized\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, AttributeValue> $contextMap
 */
class ContextDefinition extends Shape
{
    /**
     * @param array{contextMap?: array<string, AttributeValue>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
