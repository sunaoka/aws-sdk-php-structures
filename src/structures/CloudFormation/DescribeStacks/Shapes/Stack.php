<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StackId
 * @property string $StackName
 * @property string|null $ChangeSetId
 * @property string|null $Description
 * @property list<Parameter>|null $Parameters
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $DeletionTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property RollbackConfiguration|null $RollbackConfiguration
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATE_COMPLETE'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_FAILED'|'ROLLBACK_COMPLETE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE_CLEANUP_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|'UPDATE_ROLLBACK_IN_PROGRESS'|'UPDATE_ROLLBACK_FAILED'|'UPDATE_ROLLBACK_COMPLETE_CLEANUP_IN_PROGRESS'|'UPDATE_ROLLBACK_COMPLETE'|'REVIEW_IN_PROGRESS'|'IMPORT_IN_PROGRESS'|'IMPORT_COMPLETE'|'IMPORT_ROLLBACK_IN_PROGRESS'|'IMPORT_ROLLBACK_FAILED'|'IMPORT_ROLLBACK_COMPLETE' $StackStatus
 * @property string|null $StackStatusReason
 * @property bool|null $DisableRollback
 * @property list<string>|null $NotificationARNs
 * @property int<1, max>|null $TimeoutInMinutes
 * @property list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'>|null $Capabilities
 * @property list<Output>|null $Outputs
 * @property string|null $RoleARN
 * @property list<Tag>|null $Tags
 * @property bool|null $EnableTerminationProtection
 * @property string|null $ParentId
 * @property string|null $RootId
 * @property StackDriftInformation|null $DriftInformation
 * @property bool|null $RetainExceptOnCreate
 * @property 'STANDARD'|'FORCE_DELETE_STACK'|null $DeletionMode
 * @property 'CONFIGURATION_COMPLETE'|'VALIDATION_FAILED'|null $DetailedStatus
 */
class Stack extends Shape
{
    /**
     * @param array{
     *     StackId?: string|null,
     *     StackName: string,
     *     ChangeSetId?: string|null,
     *     Description?: string|null,
     *     Parameters?: list<Parameter>|null,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     DeletionTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     RollbackConfiguration?: RollbackConfiguration|null,
     *     StackStatus: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATE_COMPLETE'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_FAILED'|'ROLLBACK_COMPLETE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE_CLEANUP_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|'UPDATE_ROLLBACK_IN_PROGRESS'|'UPDATE_ROLLBACK_FAILED'|'UPDATE_ROLLBACK_COMPLETE_CLEANUP_IN_PROGRESS'|'UPDATE_ROLLBACK_COMPLETE'|'REVIEW_IN_PROGRESS'|'IMPORT_IN_PROGRESS'|'IMPORT_COMPLETE'|'IMPORT_ROLLBACK_IN_PROGRESS'|'IMPORT_ROLLBACK_FAILED'|'IMPORT_ROLLBACK_COMPLETE',
     *     StackStatusReason?: string|null,
     *     DisableRollback?: bool|null,
     *     NotificationARNs?: list<string>|null,
     *     TimeoutInMinutes?: int<1, max>|null,
     *     Capabilities?: list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'>|null,
     *     Outputs?: list<Output>|null,
     *     RoleARN?: string|null,
     *     Tags?: list<Tag>|null,
     *     EnableTerminationProtection?: bool|null,
     *     ParentId?: string|null,
     *     RootId?: string|null,
     *     DriftInformation?: StackDriftInformation|null,
     *     RetainExceptOnCreate?: bool|null,
     *     DeletionMode?: 'STANDARD'|'FORCE_DELETE_STACK'|null,
     *     DetailedStatus?: 'CONFIGURATION_COMPLETE'|'VALIDATION_FAILED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
