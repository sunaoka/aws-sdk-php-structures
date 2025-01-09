<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StackSetName
 * @property string $StackSetId
 * @property string $Description
 * @property 'ACTIVE'|'DELETED' $Status
 * @property AutoDeployment $AutoDeployment
 * @property 'SERVICE_MANAGED'|'SELF_MANAGED' $PermissionModel
 * @property 'DRIFTED'|'IN_SYNC'|'UNKNOWN'|'NOT_CHECKED' $DriftStatus
 * @property \Aws\Api\DateTimeResult $LastDriftCheckTimestamp
 * @property ManagedExecution $ManagedExecution
 */
class StackSetSummary extends Shape
{
    /**
     * @param array{
     *     StackSetName?: string,
     *     StackSetId?: string,
     *     Description?: string,
     *     Status?: 'ACTIVE'|'DELETED',
     *     AutoDeployment?: AutoDeployment,
     *     PermissionModel?: 'SERVICE_MANAGED'|'SELF_MANAGED',
     *     DriftStatus?: 'DRIFTED'|'IN_SYNC'|'UNKNOWN'|'NOT_CHECKED',
     *     LastDriftCheckTimestamp?: \Aws\Api\DateTimeResult,
     *     ManagedExecution?: ManagedExecution
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
