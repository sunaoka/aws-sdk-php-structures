<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListClusterSchedulerConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterSchedulerConfigArn
 * @property string $ClusterSchedulerConfigId
 * @property int $ClusterSchedulerConfigVersion
 * @property string $Name
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property 'Creating'|'CreateFailed'|'CreateRollbackFailed'|'Created'|'Updating'|'UpdateFailed'|'UpdateRollbackFailed'|'Updated'|'Deleting'|'DeleteFailed'|'DeleteRollbackFailed'|'Deleted' $Status
 * @property string $ClusterArn
 */
class ClusterSchedulerConfigSummary extends Shape
{
    /**
     * @param array{
     *     ClusterSchedulerConfigArn: string,
     *     ClusterSchedulerConfigId: string,
     *     ClusterSchedulerConfigVersion?: int,
     *     Name: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     Status: 'Creating'|'CreateFailed'|'CreateRollbackFailed'|'Created'|'Updating'|'UpdateFailed'|'UpdateRollbackFailed'|'Updated'|'Deleting'|'DeleteFailed'|'DeleteRollbackFailed'|'Deleted',
     *     ClusterArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
