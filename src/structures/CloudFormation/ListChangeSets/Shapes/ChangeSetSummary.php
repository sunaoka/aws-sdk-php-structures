<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListChangeSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StackId
 * @property string|null $StackName
 * @property string|null $ChangeSetId
 * @property string|null $ChangeSetName
 * @property 'UNAVAILABLE'|'AVAILABLE'|'EXECUTE_IN_PROGRESS'|'EXECUTE_COMPLETE'|'EXECUTE_FAILED'|'OBSOLETE'|null $ExecutionStatus
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED'|'FAILED'|null $Status
 * @property string|null $StatusReason
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $Description
 * @property bool|null $IncludeNestedStacks
 * @property string|null $ParentChangeSetId
 * @property string|null $RootChangeSetId
 * @property bool|null $ImportExistingResources
 */
class ChangeSetSummary extends Shape
{
    /**
     * @param array{
     *     StackId?: string|null,
     *     StackName?: string|null,
     *     ChangeSetId?: string|null,
     *     ChangeSetName?: string|null,
     *     ExecutionStatus?: 'UNAVAILABLE'|'AVAILABLE'|'EXECUTE_IN_PROGRESS'|'EXECUTE_COMPLETE'|'EXECUTE_FAILED'|'OBSOLETE'|null,
     *     Status?: 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED'|'FAILED'|null,
     *     StatusReason?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     IncludeNestedStacks?: bool|null,
     *     ParentChangeSetId?: string|null,
     *     RootChangeSetId?: string|null,
     *     ImportExistingResources?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
