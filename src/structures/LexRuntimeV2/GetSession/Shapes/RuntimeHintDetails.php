<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RuntimeHintValue>|null $runtimeHintValues
 * @property array<string, RuntimeHintDetails>|null $subSlotHints
 */
class RuntimeHintDetails extends Shape
{
    /**
     * @param array{
     *     runtimeHintValues?: list<RuntimeHintValue>|null,
     *     subSlotHints?: array<string, RuntimeHintDetails>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
