<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property array<string, SlotValueOverride> $slots
 */
class IntentOverride extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     slots?: array<string, SlotValueOverride>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
