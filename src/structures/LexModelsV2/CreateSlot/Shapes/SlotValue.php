<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $interpretedValue
 */
class SlotValue extends Shape
{
    /**
     * @param array{interpretedValue?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
