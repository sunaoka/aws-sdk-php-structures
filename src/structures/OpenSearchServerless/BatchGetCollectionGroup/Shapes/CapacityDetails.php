<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetCollectionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $capacityInOcu
 * @property 'ACTION_SCALING_UP'|'ACTION_SCALING_DOWN'|'NO_ACTION'|null $autoscalingStatus
 */
class CapacityDetails extends Shape
{
    /**
     * @param array{
     *     capacityInOcu?: float|null,
     *     autoscalingStatus?: 'ACTION_SCALING_UP'|'ACTION_SCALING_DOWN'|'NO_ACTION'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
