<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StackId
 * @property string $StackName
 * @property string $ChangeSetId
 * @property string $Description
 * @property list<Parameter> $Parameters
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $DeletionTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property RollbackConfiguration $RollbackConfiguration
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATE_COMPLETE'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_FAILED'|'ROLLBACK_COMPLETE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE_CLEANUP_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|'UPDATE_ROLLBACK_IN_PROGRESS'|'UPDATE_ROLLBACK_FAILED'|'UPDATE_ROLLBACK_COMPLETE_CLEANUP_IN_PROGRESS'|'UPDATE_ROLLBACK_COMPLETE'|'REVIEW_IN_PROGRESS'|'IMPORT_IN_PROGRESS'|'IMPORT_COMPLETE'|'IMPORT_ROLLBACK_IN_PROGRESS'|'IMPORT_ROLLBACK_FAILED'|'IMPORT_ROLLBACK_COMPLETE' $StackStatus
 * @property string $StackStatusReason
 * @property bool $DisableRollback
 * @property list<string> $NotificationARNs
 * @property int<1, max> $TimeoutInMinutes
 * @property list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'> $Capabilities
 * @property list<Output> $Outputs
 * @property string $RoleARN
 * @property list<Tag> $Tags
 * @property bool $EnableTerminationProtection
 * @property string $ParentId
 * @property string $RootId
 * @property StackDriftInformation $DriftInformation
 * @property bool $RetainExceptOnCreate
 * @property 'STANDARD'|'FORCE_DELETE_STACK' $DeletionMode
 * @property 'CONFIGURATION_COMPLETE'|'VALIDATION_FAILED' $DetailedStatus
 */
class Stack extends Shape
{
    /**
     * @param array{
     *     StackId?: string,
     *     StackName: string,
     *     ChangeSetId?: string,
     *     Description?: string,
     *     Parameters?: list<Parameter>,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     DeletionTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     RollbackConfiguration?: RollbackConfiguration,
     *     StackStatus: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATE_COMPLETE'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_FAILED'|'ROLLBACK_COMPLETE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE_CLEANUP_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|'UPDATE_ROLLBACK_IN_PROGRESS'|'UPDATE_ROLLBACK_FAILED'|'UPDATE_ROLLBACK_COMPLETE_CLEANUP_IN_PROGRESS'|'UPDATE_ROLLBACK_COMPLETE'|'REVIEW_IN_PROGRESS'|'IMPORT_IN_PROGRESS'|'IMPORT_COMPLETE'|'IMPORT_ROLLBACK_IN_PROGRESS'|'IMPORT_ROLLBACK_FAILED'|'IMPORT_ROLLBACK_COMPLETE',
     *     StackStatusReason?: string,
     *     DisableRollback?: bool,
     *     NotificationARNs?: list<string>,
     *     TimeoutInMinutes?: int<1, max>,
     *     Capabilities?: list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'>,
     *     Outputs?: list<Output>,
     *     RoleARN?: string,
     *     Tags?: list<Tag>,
     *     EnableTerminationProtection?: bool,
     *     ParentId?: string,
     *     RootId?: string,
     *     DriftInformation?: StackDriftInformation,
     *     RetainExceptOnCreate?: bool,
     *     DeletionMode?: 'STANDARD'|'FORCE_DELETE_STACK',
     *     DetailedStatus?: 'CONFIGURATION_COMPLETE'|'VALIDATION_FAILED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
