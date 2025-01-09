<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClusterOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StepStatus
 */
class ClusterOperationStepInfo extends Shape
{
    /**
     * @param array{StepStatus?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
