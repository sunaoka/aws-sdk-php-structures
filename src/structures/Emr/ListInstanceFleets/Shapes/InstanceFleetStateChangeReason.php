<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INTERNAL_ERROR'|'VALIDATION_ERROR'|'INSTANCE_FAILURE'|'CLUSTER_TERMINATED'|null $Code
 * @property string|null $Message
 */
class InstanceFleetStateChangeReason extends Shape
{
    /**
     * @param array{
     *     Code?: 'INTERNAL_ERROR'|'VALIDATION_ERROR'|'INSTANCE_FAILURE'|'CLUSTER_TERMINATED'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
