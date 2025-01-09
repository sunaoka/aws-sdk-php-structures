<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateSlotType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $slotTypeId
 */
class SubSlotTypeComposition extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     slotTypeId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
