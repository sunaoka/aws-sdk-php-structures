<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $interpretedValue
 */
class SlotValue extends Shape
{
    /**
     * @param array{interpretedValue?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
