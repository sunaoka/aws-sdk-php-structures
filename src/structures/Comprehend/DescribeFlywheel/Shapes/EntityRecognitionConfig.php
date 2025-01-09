<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeFlywheel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EntityTypesListItem> $EntityTypes
 */
class EntityRecognitionConfig extends Shape
{
    /**
     * @param array{EntityTypes: list<EntityTypesListItem>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
