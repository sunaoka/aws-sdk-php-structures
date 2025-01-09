<?php

namespace Sunaoka\Aws\Structures\Comprehend\CreateFlywheel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 */
class EntityTypesListItem extends Shape
{
    /**
     * @param array{Type: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
