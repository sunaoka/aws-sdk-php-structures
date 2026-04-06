<?php

namespace Sunaoka\Aws\Structures\SageMaker\BatchRebootClusterNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NodeId
 * @property 'InstanceIdNotFound'|'InvalidInstanceStatus'|'InstanceIdInUse'|'InternalServerError' $ErrorCode
 * @property string $Message
 */
class BatchRebootClusterNodesError extends Shape
{
    /**
     * @param array{
     *     NodeId: string,
     *     ErrorCode: 'InstanceIdNotFound'|'InvalidInstanceStatus'|'InstanceIdInUse'|'InternalServerError',
     *     Message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
