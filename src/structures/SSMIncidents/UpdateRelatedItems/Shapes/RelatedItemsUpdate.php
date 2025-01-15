<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\UpdateRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RelatedItem|null $itemToAdd
 * @property ItemIdentifier|null $itemToRemove
 */
class RelatedItemsUpdate extends Shape
{
    /**
     * @param array{
     *     itemToAdd?: RelatedItem|null,
     *     itemToRemove?: ItemIdentifier|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
