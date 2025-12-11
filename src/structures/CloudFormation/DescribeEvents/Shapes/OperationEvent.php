<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EventId
 * @property string|null $StackId
 * @property string|null $OperationId
 * @property 'CREATE_STACK'|'UPDATE_STACK'|'DELETE_STACK'|'CONTINUE_ROLLBACK'|'ROLLBACK'|'CREATE_CHANGESET'|null $OperationType
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|null $OperationStatus
 * @property 'STACK_EVENT'|'PROGRESS_EVENT'|'VALIDATION_ERROR'|'PROVISIONING_ERROR'|'HOOK_INVOCATION_ERROR'|null $EventType
 * @property string|null $LogicalResourceId
 * @property string|null $PhysicalResourceId
 * @property string|null $ResourceType
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATE_COMPLETE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'DELETE_SKIPPED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'UPDATE_COMPLETE'|'IMPORT_FAILED'|'IMPORT_COMPLETE'|'IMPORT_IN_PROGRESS'|'IMPORT_ROLLBACK_IN_PROGRESS'|'IMPORT_ROLLBACK_FAILED'|'IMPORT_ROLLBACK_COMPLETE'|'EXPORT_FAILED'|'EXPORT_COMPLETE'|'EXPORT_IN_PROGRESS'|'EXPORT_ROLLBACK_IN_PROGRESS'|'EXPORT_ROLLBACK_FAILED'|'EXPORT_ROLLBACK_COMPLETE'|'UPDATE_ROLLBACK_IN_PROGRESS'|'UPDATE_ROLLBACK_COMPLETE'|'UPDATE_ROLLBACK_FAILED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_COMPLETE'|'ROLLBACK_FAILED'|null $ResourceStatus
 * @property string|null $ResourceStatusReason
 * @property string|null $ResourceProperties
 * @property string|null $ClientRequestToken
 * @property string|null $HookType
 * @property 'HOOK_IN_PROGRESS'|'HOOK_COMPLETE_SUCCEEDED'|'HOOK_COMPLETE_FAILED'|'HOOK_FAILED'|null $HookStatus
 * @property string|null $HookStatusReason
 * @property 'PRE_PROVISION'|null $HookInvocationPoint
 * @property 'FAIL'|'WARN'|null $HookFailureMode
 * @property 'CONFIGURATION_COMPLETE'|'VALIDATION_FAILED'|null $DetailedStatus
 * @property 'FAIL'|'WARN'|null $ValidationFailureMode
 * @property string|null $ValidationName
 * @property 'FAILED'|'SKIPPED'|null $ValidationStatus
 * @property string|null $ValidationStatusReason
 * @property string|null $ValidationPath
 */
class OperationEvent extends Shape
{
    /**
     * @param array{
     *     EventId?: string|null,
     *     StackId?: string|null,
     *     OperationId?: string|null,
     *     OperationType?: 'CREATE_STACK'|'UPDATE_STACK'|'DELETE_STACK'|'CONTINUE_ROLLBACK'|'ROLLBACK'|'CREATE_CHANGESET'|null,
     *     OperationStatus?: 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|null,
     *     EventType?: 'STACK_EVENT'|'PROGRESS_EVENT'|'VALIDATION_ERROR'|'PROVISIONING_ERROR'|'HOOK_INVOCATION_ERROR'|null,
     *     LogicalResourceId?: string|null,
     *     PhysicalResourceId?: string|null,
     *     ResourceType?: string|null,
     *     Timestamp?: \Aws\Api\DateTimeResult|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     ResourceStatus?: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATE_COMPLETE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'DELETE_SKIPPED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'UPDATE_COMPLETE'|'IMPORT_FAILED'|'IMPORT_COMPLETE'|'IMPORT_IN_PROGRESS'|'IMPORT_ROLLBACK_IN_PROGRESS'|'IMPORT_ROLLBACK_FAILED'|'IMPORT_ROLLBACK_COMPLETE'|'EXPORT_FAILED'|'EXPORT_COMPLETE'|'EXPORT_IN_PROGRESS'|'EXPORT_ROLLBACK_IN_PROGRESS'|'EXPORT_ROLLBACK_FAILED'|'EXPORT_ROLLBACK_COMPLETE'|'UPDATE_ROLLBACK_IN_PROGRESS'|'UPDATE_ROLLBACK_COMPLETE'|'UPDATE_ROLLBACK_FAILED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_COMPLETE'|'ROLLBACK_FAILED'|null,
     *     ResourceStatusReason?: string|null,
     *     ResourceProperties?: string|null,
     *     ClientRequestToken?: string|null,
     *     HookType?: string|null,
     *     HookStatus?: 'HOOK_IN_PROGRESS'|'HOOK_COMPLETE_SUCCEEDED'|'HOOK_COMPLETE_FAILED'|'HOOK_FAILED'|null,
     *     HookStatusReason?: string|null,
     *     HookInvocationPoint?: 'PRE_PROVISION'|null,
     *     HookFailureMode?: 'FAIL'|'WARN'|null,
     *     DetailedStatus?: 'CONFIGURATION_COMPLETE'|'VALIDATION_FAILED'|null,
     *     ValidationFailureMode?: 'FAIL'|'WARN'|null,
     *     ValidationName?: string|null,
     *     ValidationStatus?: 'FAILED'|'SKIPPED'|null,
     *     ValidationStatusReason?: string|null,
     *     ValidationPath?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
