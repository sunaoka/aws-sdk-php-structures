<?php

namespace Sunaoka\Aws\Structures\SageMaker\BatchAddClusterNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceGroupName
 * @property 'InstanceGroupNotFound'|'InvalidInstanceGroupStatus' $ErrorCode
 * @property int<1, max> $FailedCount
 * @property string|null $Message
 */
class BatchAddClusterNodesError extends Shape
{
    /**
     * @param array{
     *     InstanceGroupName: string,
     *     ErrorCode: 'InstanceGroupNotFound'|'InvalidInstanceGroupStatus',
     *     FailedCount: int<1, max>,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
