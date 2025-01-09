<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateSlotType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $pattern
 */
class SlotValueRegexFilter extends Shape
{
    /**
     * @param array{pattern: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
