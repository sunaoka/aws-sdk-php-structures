<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StackId
 * @property string $EventId
 * @property string $StackName
 * @property string $LogicalResourceId
 * @property string $PhysicalResourceId
 * @property string $ResourceType
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATE_COMPLETE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'DELETE_SKIPPED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'UPDATE_COMPLETE'|'IMPORT_FAILED'|'IMPORT_COMPLETE'|'IMPORT_IN_PROGRESS'|'IMPORT_ROLLBACK_IN_PROGRESS'|'IMPORT_ROLLBACK_FAILED'|'IMPORT_ROLLBACK_COMPLETE'|'UPDATE_ROLLBACK_IN_PROGRESS'|'UPDATE_ROLLBACK_COMPLETE'|'UPDATE_ROLLBACK_FAILED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_COMPLETE'|'ROLLBACK_FAILED' $ResourceStatus
 * @property string $ResourceStatusReason
 * @property string $ResourceProperties
 * @property string $ClientRequestToken
 * @property string $HookType
 * @property 'HOOK_IN_PROGRESS'|'HOOK_COMPLETE_SUCCEEDED'|'HOOK_COMPLETE_FAILED'|'HOOK_FAILED' $HookStatus
 * @property string $HookStatusReason
 * @property 'PRE_PROVISION' $HookInvocationPoint
 * @property 'FAIL'|'WARN' $HookFailureMode
 * @property 'CONFIGURATION_COMPLETE'|'VALIDATION_FAILED' $DetailedStatus
 */
class StackEvent extends Shape
{
    /**
     * @param array{
     *     StackId: string,
     *     EventId: string,
     *     StackName: string,
     *     LogicalResourceId?: string,
     *     PhysicalResourceId?: string,
     *     ResourceType?: string,
     *     Timestamp: \Aws\Api\DateTimeResult,
     *     ResourceStatus?: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATE_COMPLETE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'DELETE_SKIPPED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'UPDATE_COMPLETE'|'IMPORT_FAILED'|'IMPORT_COMPLETE'|'IMPORT_IN_PROGRESS'|'IMPORT_ROLLBACK_IN_PROGRESS'|'IMPORT_ROLLBACK_FAILED'|'IMPORT_ROLLBACK_COMPLETE'|'UPDATE_ROLLBACK_IN_PROGRESS'|'UPDATE_ROLLBACK_COMPLETE'|'UPDATE_ROLLBACK_FAILED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_COMPLETE'|'ROLLBACK_FAILED',
     *     ResourceStatusReason?: string,
     *     ResourceProperties?: string,
     *     ClientRequestToken?: string,
     *     HookType?: string,
     *     HookStatus?: 'HOOK_IN_PROGRESS'|'HOOK_COMPLETE_SUCCEEDED'|'HOOK_COMPLETE_FAILED'|'HOOK_FAILED',
     *     HookStatusReason?: string,
     *     HookInvocationPoint?: 'PRE_PROVISION',
     *     HookFailureMode?: 'FAIL'|'WARN',
     *     DetailedStatus?: 'CONFIGURATION_COMPLETE'|'VALIDATION_FAILED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
