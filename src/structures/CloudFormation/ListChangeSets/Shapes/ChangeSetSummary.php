<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListChangeSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StackId
 * @property string $StackName
 * @property string $ChangeSetId
 * @property string $ChangeSetName
 * @property 'UNAVAILABLE'|'AVAILABLE'|'EXECUTE_IN_PROGRESS'|'EXECUTE_COMPLETE'|'EXECUTE_FAILED'|'OBSOLETE' $ExecutionStatus
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED'|'FAILED' $Status
 * @property string $StatusReason
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $Description
 * @property bool $IncludeNestedStacks
 * @property string $ParentChangeSetId
 * @property string $RootChangeSetId
 * @property bool $ImportExistingResources
 */
class ChangeSetSummary extends Shape
{
    /**
     * @param array{
     *     StackId?: string,
     *     StackName?: string,
     *     ChangeSetId?: string,
     *     ChangeSetName?: string,
     *     ExecutionStatus?: 'UNAVAILABLE'|'AVAILABLE'|'EXECUTE_IN_PROGRESS'|'EXECUTE_COMPLETE'|'EXECUTE_FAILED'|'OBSOLETE',
     *     Status?: 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED'|'FAILED',
     *     StatusReason?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     Description?: string,
     *     IncludeNestedStacks?: bool,
     *     ParentChangeSetId?: string,
     *     RootChangeSetId?: string,
     *     ImportExistingResources?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
