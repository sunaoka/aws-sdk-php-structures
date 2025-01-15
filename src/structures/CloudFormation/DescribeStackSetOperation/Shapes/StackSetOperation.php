<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackSetOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OperationId
 * @property string|null $StackSetId
 * @property 'CREATE'|'UPDATE'|'DELETE'|'DETECT_DRIFT'|null $Action
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'STOPPING'|'STOPPED'|'QUEUED'|null $Status
 * @property StackSetOperationPreferences|null $OperationPreferences
 * @property bool|null $RetainStacks
 * @property string|null $AdministrationRoleARN
 * @property string|null $ExecutionRoleName
 * @property \Aws\Api\DateTimeResult|null $CreationTimestamp
 * @property \Aws\Api\DateTimeResult|null $EndTimestamp
 * @property DeploymentTargets|null $DeploymentTargets
 * @property StackSetDriftDetectionDetails|null $StackSetDriftDetectionDetails
 * @property string|null $StatusReason
 * @property StackSetOperationStatusDetails|null $StatusDetails
 */
class StackSetOperation extends Shape
{
    /**
     * @param array{
     *     OperationId?: string|null,
     *     StackSetId?: string|null,
     *     Action?: 'CREATE'|'UPDATE'|'DELETE'|'DETECT_DRIFT'|null,
     *     Status?: 'RUNNING'|'SUCCEEDED'|'FAILED'|'STOPPING'|'STOPPED'|'QUEUED'|null,
     *     OperationPreferences?: StackSetOperationPreferences|null,
     *     RetainStacks?: bool|null,
     *     AdministrationRoleARN?: string|null,
     *     ExecutionRoleName?: string|null,
     *     CreationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     EndTimestamp?: \Aws\Api\DateTimeResult|null,
     *     DeploymentTargets?: DeploymentTargets|null,
     *     StackSetDriftDetectionDetails?: StackSetDriftDetectionDetails|null,
     *     StatusReason?: string|null,
     *     StatusDetails?: StackSetOperationStatusDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
