<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\ListRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $generatedId
 * @property ItemIdentifier $identifier
 * @property string|null $title
 */
class RelatedItem extends Shape
{
    /**
     * @param array{
     *     generatedId?: string|null,
     *     identifier: ItemIdentifier,
     *     title?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
