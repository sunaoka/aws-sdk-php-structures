<?php

namespace Sunaoka\Aws\Structures\SageMaker\BatchDeleteClusterNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NodeIdNotFound'|'InvalidNodeStatus'|'NodeIdInUse' $Code
 * @property string $Message
 * @property string $NodeId
 */
class BatchDeleteClusterNodesError extends Shape
{
    /**
     * @param array{
     *     Code: 'NodeIdNotFound'|'InvalidNodeStatus'|'NodeIdInUse',
     *     Message: string,
     *     NodeId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
