<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSlotTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SlotTypeName'|'ExternalSourceType' $name
 * @property list<string> $values
 * @property 'CO'|'EQ' $operator
 */
class SlotTypeFilter extends Shape
{
    /**
     * @param array{
     *     name: 'SlotTypeName'|'ExternalSourceType',
     *     values: list<string>,
     *     operator: 'CO'|'EQ'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
