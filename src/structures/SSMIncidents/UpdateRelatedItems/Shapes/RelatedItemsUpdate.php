<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\UpdateRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RelatedItem $itemToAdd
 * @property ItemIdentifier $itemToRemove
 */
class RelatedItemsUpdate extends Shape
{
    /**
     * @param array{
     *     itemToAdd?: RelatedItem,
     *     itemToRemove?: ItemIdentifier
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
