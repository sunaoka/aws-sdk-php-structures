<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Running'|'Failure'|'Pending'|'ShuttingDown'|'SystemUpdating'|'DeepHealthCheckInProgress' $Status
 * @property string $Message
 */
class ClusterInstanceStatusDetails extends Shape
{
    /**
     * @param array{
     *     Status: 'Running'|'Failure'|'Pending'|'ShuttingDown'|'SystemUpdating'|'DeepHealthCheckInProgress',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
