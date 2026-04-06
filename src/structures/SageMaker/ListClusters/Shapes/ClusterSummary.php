<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterArn
 * @property string $ClusterName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property 'Creating'|'Deleting'|'Failed'|'InService'|'RollingBack'|'SystemUpdating'|'Updating' $ClusterStatus
 */
class ClusterSummary extends Shape
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     ClusterName: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     ClusterStatus: 'Creating'|'Deleting'|'Failed'|'InService'|'RollingBack'|'SystemUpdating'|'Updating'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
