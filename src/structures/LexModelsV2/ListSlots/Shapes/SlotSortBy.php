<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSlots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SlotName'|'LastUpdatedDateTime' $attribute
 * @property 'Ascending'|'Descending' $order
 */
class SlotSortBy extends Shape
{
    /**
     * @param array{
     *     attribute: 'SlotName'|'LastUpdatedDateTime',
     *     order: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
