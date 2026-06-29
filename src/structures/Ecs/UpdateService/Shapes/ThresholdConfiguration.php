<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COUNT'|'BOUNDED_PERCENT'|'UNBOUNDED_PERCENT' $type
 * @property int $value
 */
class ThresholdConfiguration extends Shape
{
    /**
     * @param array{
     *     type: 'COUNT'|'BOUNDED_PERCENT'|'UNBOUNDED_PERCENT',
     *     value: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
