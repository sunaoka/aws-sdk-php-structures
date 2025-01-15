<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StackName
 * @property string|null $StackId
 * @property string $LogicalResourceId
 * @property string|null $PhysicalResourceId
 * @property string $ResourceType
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATE_COMPLETE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'DELETE_SKIPPED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'UPDATE_COMPLETE'|'IMPORT_FAILED'|'IMPORT_COMPLETE'|'IMPORT_IN_PROGRESS'|'IMPORT_ROLLBACK_IN_PROGRESS'|'IMPORT_ROLLBACK_FAILED'|'IMPORT_ROLLBACK_COMPLETE'|'UPDATE_ROLLBACK_IN_PROGRESS'|'UPDATE_ROLLBACK_COMPLETE'|'UPDATE_ROLLBACK_FAILED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_COMPLETE'|'ROLLBACK_FAILED' $ResourceStatus
 * @property string|null $ResourceStatusReason
 * @property string|null $Description
 * @property StackResourceDriftInformation|null $DriftInformation
 * @property ModuleInfo|null $ModuleInfo
 */
class StackResource extends Shape
{
    /**
     * @param array{
     *     StackName?: string|null,
     *     StackId?: string|null,
     *     LogicalResourceId: string,
     *     PhysicalResourceId?: string|null,
     *     ResourceType: string,
     *     Timestamp: \Aws\Api\DateTimeResult,
     *     ResourceStatus: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATE_COMPLETE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'DELETE_SKIPPED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'UPDATE_COMPLETE'|'IMPORT_FAILED'|'IMPORT_COMPLETE'|'IMPORT_IN_PROGRESS'|'IMPORT_ROLLBACK_IN_PROGRESS'|'IMPORT_ROLLBACK_FAILED'|'IMPORT_ROLLBACK_COMPLETE'|'UPDATE_ROLLBACK_IN_PROGRESS'|'UPDATE_ROLLBACK_COMPLETE'|'UPDATE_ROLLBACK_FAILED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_COMPLETE'|'ROLLBACK_FAILED',
     *     ResourceStatusReason?: string|null,
     *     Description?: string|null,
     *     DriftInformation?: StackResourceDriftInformation|null,
     *     ModuleInfo?: ModuleInfo|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
