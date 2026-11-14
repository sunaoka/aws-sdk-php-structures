<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListClusterOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OperationId
 * @property string|null $ClusterArn
 * @property 'Scaling'|'DeepHealthCheck'|null $Type
 * @property 'InProgress'|'Superseded'|'Done'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 */
class ClusterOperationSummary extends Shape
{
    /**
     * @param array{
     *     OperationId?: string|null,
     *     ClusterArn?: string|null,
     *     Type?: 'Scaling'|'DeepHealthCheck'|null,
     *     Status?: 'InProgress'|'Superseded'|'Done'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
