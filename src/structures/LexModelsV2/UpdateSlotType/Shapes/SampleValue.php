<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateSlotType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $value
 */
class SampleValue extends Shape
{
    /**
     * @param array{value: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
