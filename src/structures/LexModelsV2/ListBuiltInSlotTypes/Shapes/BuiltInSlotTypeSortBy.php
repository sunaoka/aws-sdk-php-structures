<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBuiltInSlotTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SlotTypeSignature' $attribute
 * @property 'Ascending'|'Descending' $order
 */
class BuiltInSlotTypeSortBy extends Shape
{
    /**
     * @param array{
     *     attribute: 'SlotTypeSignature',
     *     order: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
