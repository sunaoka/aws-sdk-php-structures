<?php

namespace Sunaoka\Aws\Structures\Bedrock\PutEnforcedGuardrailConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SELECTIVE'|'COMPREHENSIVE'|null $system
 * @property 'SELECTIVE'|'COMPREHENSIVE'|null $messages
 */
class SelectiveContentGuarding extends Shape
{
    /**
     * @param array{
     *     system?: 'SELECTIVE'|'COMPREHENSIVE'|null,
     *     messages?: 'SELECTIVE'|'COMPREHENSIVE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
