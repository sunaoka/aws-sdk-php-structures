<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INTERNAL_ERROR'|'VALIDATION_ERROR'|'INSTANCE_FAILURE'|'INSTANCE_FLEET_TIMEOUT'|'BOOTSTRAP_FAILURE'|'USER_REQUEST'|'STEP_FAILURE'|'ALL_STEPS_COMPLETED' $Code
 * @property string $Message
 */
class ClusterStateChangeReason extends Shape
{
    /**
     * @param array{
     *     Code?: 'INTERNAL_ERROR'|'VALIDATION_ERROR'|'INSTANCE_FAILURE'|'INSTANCE_FLEET_TIMEOUT'|'BOOTSTRAP_FAILURE'|'USER_REQUEST'|'STEP_FAILURE'|'ALL_STEPS_COMPLETED',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
