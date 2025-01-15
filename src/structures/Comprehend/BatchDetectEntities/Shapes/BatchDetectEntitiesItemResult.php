<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Index
 * @property list<Entity>|null $Entities
 */
class BatchDetectEntitiesItemResult extends Shape
{
    /**
     * @param array{
     *     Index?: int|null,
     *     Entities?: list<Entity>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
