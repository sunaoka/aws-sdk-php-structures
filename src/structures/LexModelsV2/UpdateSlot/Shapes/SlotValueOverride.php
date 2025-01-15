<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Scalar'|'List'|null $shape
 * @property SlotValue|null $value
 * @property list<SlotValueOverride>|null $values
 */
class SlotValueOverride extends Shape
{
    /**
     * @param array{
     *     shape?: 'Scalar'|'List'|null,
     *     value?: SlotValue|null,
     *     values?: list<SlotValueOverride>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
