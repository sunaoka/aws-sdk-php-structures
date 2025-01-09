<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\PutSlotType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $pattern
 */
class SlotTypeRegexConfiguration extends Shape
{
    /**
     * @param array{pattern: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
