<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSlotTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SlotTypeName'|'LastUpdatedDateTime' $attribute
 * @property 'Ascending'|'Descending' $order
 */
class SlotTypeSortBy extends Shape
{
    /**
     * @param array{
     *     attribute: 'SlotTypeName'|'LastUpdatedDateTime',
     *     order: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
