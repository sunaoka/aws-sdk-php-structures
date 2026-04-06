<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StackId
 * @property string $EventId
 * @property string $StackName
 * @property string|null $OperationId
 * @property string|null $LogicalResourceId
 * @property string|null $PhysicalResourceId
 * @property string|null $ResourceType
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATE_COMPLETE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'DELETE_SKIPPED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'UPDATE_COMPLETE'|'IMPORT_FAILED'|'IMPORT_COMPLETE'|'IMPORT_IN_PROGRESS'|'IMPORT_ROLLBACK_IN_PROGRESS'|'IMPORT_ROLLBACK_FAILED'|'IMPORT_ROLLBACK_COMPLETE'|'EXPORT_FAILED'|'EXPORT_COMPLETE'|'EXPORT_IN_PROGRESS'|'EXPORT_ROLLBACK_IN_PROGRESS'|'EXPORT_ROLLBACK_FAILED'|'EXPORT_ROLLBACK_COMPLETE'|'UPDATE_ROLLBACK_IN_PROGRESS'|'UPDATE_ROLLBACK_COMPLETE'|'UPDATE_ROLLBACK_FAILED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_COMPLETE'|'ROLLBACK_FAILED'|null $ResourceStatus
 * @property string|null $ResourceStatusReason
 * @property string|null $ResourceProperties
 * @property string|null $ClientRequestToken
 * @property string|null $HookType
 * @property 'HOOK_IN_PROGRESS'|'HOOK_COMPLETE_SUCCEEDED'|'HOOK_COMPLETE_FAILED'|'HOOK_FAILED'|null $HookStatus
 * @property string|null $HookStatusReason
 * @property 'PRE_PROVISION'|null $HookInvocationPoint
 * @property string|null $HookInvocationId
 * @property 'FAIL'|'WARN'|null $HookFailureMode
 * @property 'CONFIGURATION_COMPLETE'|'VALIDATION_FAILED'|null $DetailedStatus
 */
class StackEvent extends Shape
{
    /**
     * @param array{
     *     StackId: string,
     *     EventId: string,
     *     StackName: string,
     *     OperationId?: string|null,
     *     LogicalResourceId?: string|null,
     *     PhysicalResourceId?: string|null,
     *     ResourceType?: string|null,
     *     Timestamp: \Aws\Api\DateTimeResult,
     *     ResourceStatus?: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATE_COMPLETE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'DELETE_SKIPPED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'UPDATE_COMPLETE'|'IMPORT_FAILED'|'IMPORT_COMPLETE'|'IMPORT_IN_PROGRESS'|'IMPORT_ROLLBACK_IN_PROGRESS'|'IMPORT_ROLLBACK_FAILED'|'IMPORT_ROLLBACK_COMPLETE'|'EXPORT_FAILED'|'EXPORT_COMPLETE'|'EXPORT_IN_PROGRESS'|'EXPORT_ROLLBACK_IN_PROGRESS'|'EXPORT_ROLLBACK_FAILED'|'EXPORT_ROLLBACK_COMPLETE'|'UPDATE_ROLLBACK_IN_PROGRESS'|'UPDATE_ROLLBACK_COMPLETE'|'UPDATE_ROLLBACK_FAILED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_COMPLETE'|'ROLLBACK_FAILED'|null,
     *     ResourceStatusReason?: string|null,
     *     ResourceProperties?: string|null,
     *     ClientRequestToken?: string|null,
     *     HookType?: string|null,
     *     HookStatus?: 'HOOK_IN_PROGRESS'|'HOOK_COMPLETE_SUCCEEDED'|'HOOK_COMPLETE_FAILED'|'HOOK_FAILED'|null,
     *     HookStatusReason?: string|null,
     *     HookInvocationPoint?: 'PRE_PROVISION'|null,
     *     HookInvocationId?: string|null,
     *     HookFailureMode?: 'FAIL'|'WARN'|null,
     *     DetailedStatus?: 'CONFIGURATION_COMPLETE'|'VALIDATION_FAILED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
