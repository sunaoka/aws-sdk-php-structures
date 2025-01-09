<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RuntimeHintValue> $runtimeHintValues
 * @property array<string, RuntimeHintDetails> $subSlotHints
 */
class RuntimeHintDetails extends Shape
{
    /**
     * @param array{
     *     runtimeHintValues?: list<RuntimeHintValue>,
     *     subSlotHints?: array<string, RuntimeHintDetails>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
