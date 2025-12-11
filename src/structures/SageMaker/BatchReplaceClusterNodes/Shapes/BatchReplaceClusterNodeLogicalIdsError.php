<?php

namespace Sunaoka\Aws\Structures\SageMaker\BatchReplaceClusterNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NodeLogicalId
 * @property 'InstanceIdNotFound'|'InvalidInstanceStatus'|'InstanceIdInUse'|'InternalServerError' $ErrorCode
 * @property string $Message
 */
class BatchReplaceClusterNodeLogicalIdsError extends Shape
{
    /**
     * @param array{
     *     NodeLogicalId: string,
     *     ErrorCode: 'InstanceIdNotFound'|'InvalidInstanceStatus'|'InstanceIdInUse'|'InternalServerError',
     *     Message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
