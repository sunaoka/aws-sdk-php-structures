<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSlots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SlotName' $name
 * @property list<string> $values
 * @property 'CO'|'EQ' $operator
 */
class SlotFilter extends Shape
{
    /**
     * @param array{
     *     name: 'SlotName',
     *     values: list<string>,
     *     operator: 'CO'|'EQ'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
