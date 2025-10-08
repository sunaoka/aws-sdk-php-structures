<?php

namespace Sunaoka\Aws\Structures\SageMaker\BatchAddClusterNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NodeLogicalId
 * @property string $InstanceGroupName
 * @property 'Running'|'Failure'|'Pending'|'ShuttingDown'|'SystemUpdating'|'DeepHealthCheckInProgress'|'NotFound' $Status
 */
class NodeAdditionResult extends Shape
{
    /**
     * @param array{
     *     NodeLogicalId: string,
     *     InstanceGroupName: string,
     *     Status: 'Running'|'Failure'|'Pending'|'ShuttingDown'|'SystemUpdating'|'DeepHealthCheckInProgress'|'NotFound'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
