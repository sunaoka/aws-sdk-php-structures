<?php

namespace Sunaoka\Aws\Structures\SageMaker\MoveClusterNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NodeIdNotFound'|'InvalidNodeStatus'|'NodeIdInUse'|'NodeInstanceTypeMismatch' $Code
 * @property string $Message
 * @property string $NodeLogicalId
 */
class MoveClusterNodeLogicalIdsError extends Shape
{
    /**
     * @param array{
     *     Code: 'NodeIdNotFound'|'InvalidNodeStatus'|'NodeIdInUse'|'NodeInstanceTypeMismatch',
     *     Message: string,
     *     NodeLogicalId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
