<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListClusterNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Running'|'Failure'|'Pending'|'ShuttingDown'|'SystemUpdating'|'DeepHealthCheckInProgress' $Status
 * @property string|null $Message
 */
class ClusterInstanceStatusDetails extends Shape
{
    /**
     * @param array{
     *     Status: 'Running'|'Failure'|'Pending'|'ShuttingDown'|'SystemUpdating'|'DeepHealthCheckInProgress',
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
