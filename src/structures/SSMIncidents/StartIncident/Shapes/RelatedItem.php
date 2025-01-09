<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\StartIncident\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $generatedId
 * @property ItemIdentifier $identifier
 * @property string $title
 */
class RelatedItem extends Shape
{
    /**
     * @param array{
     *     generatedId?: string,
     *     identifier: ItemIdentifier,
     *     title?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
