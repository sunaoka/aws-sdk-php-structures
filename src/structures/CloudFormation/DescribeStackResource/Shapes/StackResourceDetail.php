<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StackName
 * @property string $StackId
 * @property string $LogicalResourceId
 * @property string $PhysicalResourceId
 * @property string $ResourceType
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimestamp
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATE_COMPLETE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'DELETE_SKIPPED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'UPDATE_COMPLETE'|'IMPORT_FAILED'|'IMPORT_COMPLETE'|'IMPORT_IN_PROGRESS'|'IMPORT_ROLLBACK_IN_PROGRESS'|'IMPORT_ROLLBACK_FAILED'|'IMPORT_ROLLBACK_COMPLETE'|'UPDATE_ROLLBACK_IN_PROGRESS'|'UPDATE_ROLLBACK_COMPLETE'|'UPDATE_ROLLBACK_FAILED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_COMPLETE'|'ROLLBACK_FAILED' $ResourceStatus
 * @property string $ResourceStatusReason
 * @property string $Description
 * @property string $Metadata
 * @property StackResourceDriftInformation $DriftInformation
 * @property ModuleInfo $ModuleInfo
 */
class StackResourceDetail extends Shape
{
    /**
     * @param array{
     *     StackName?: string,
     *     StackId?: string,
     *     LogicalResourceId: string,
     *     PhysicalResourceId?: string,
     *     ResourceType: string,
     *     LastUpdatedTimestamp: \Aws\Api\DateTimeResult,
     *     ResourceStatus: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATE_COMPLETE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'DELETE_SKIPPED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'UPDATE_COMPLETE'|'IMPORT_FAILED'|'IMPORT_COMPLETE'|'IMPORT_IN_PROGRESS'|'IMPORT_ROLLBACK_IN_PROGRESS'|'IMPORT_ROLLBACK_FAILED'|'IMPORT_ROLLBACK_COMPLETE'|'UPDATE_ROLLBACK_IN_PROGRESS'|'UPDATE_ROLLBACK_COMPLETE'|'UPDATE_ROLLBACK_FAILED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_COMPLETE'|'ROLLBACK_FAILED',
     *     ResourceStatusReason?: string,
     *     Description?: string,
     *     Metadata?: string,
     *     DriftInformation?: StackResourceDriftInformation,
     *     ModuleInfo?: ModuleInfo
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
