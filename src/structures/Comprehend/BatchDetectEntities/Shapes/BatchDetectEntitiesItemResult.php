<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Index
 * @property list<Entity> $Entities
 */
class BatchDetectEntitiesItemResult extends Shape
{
    /**
     * @param array{
     *     Index?: int,
     *     Entities?: list<Entity>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
