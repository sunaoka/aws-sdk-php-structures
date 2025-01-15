<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property array<string, SlotValueOverride>|null $slots
 */
class IntentOverride extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     slots?: array<string, SlotValueOverride>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
