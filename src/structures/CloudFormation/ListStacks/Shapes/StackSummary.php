<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StackId
 * @property string $StackName
 * @property string|null $TemplateDescription
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property \Aws\Api\DateTimeResult|null $DeletionTime
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATE_COMPLETE'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_FAILED'|'ROLLBACK_COMPLETE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE_CLEANUP_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|'UPDATE_ROLLBACK_IN_PROGRESS'|'UPDATE_ROLLBACK_FAILED'|'UPDATE_ROLLBACK_COMPLETE_CLEANUP_IN_PROGRESS'|'UPDATE_ROLLBACK_COMPLETE'|'REVIEW_IN_PROGRESS'|'IMPORT_IN_PROGRESS'|'IMPORT_COMPLETE'|'IMPORT_ROLLBACK_IN_PROGRESS'|'IMPORT_ROLLBACK_FAILED'|'IMPORT_ROLLBACK_COMPLETE' $StackStatus
 * @property string|null $StackStatusReason
 * @property string|null $ParentId
 * @property string|null $RootId
 * @property StackDriftInformationSummary|null $DriftInformation
 * @property list<OperationEntry>|null $LastOperations
 */
class StackSummary extends Shape
{
    /**
     * @param array{
     *     StackId?: string|null,
     *     StackName: string,
     *     TemplateDescription?: string|null,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     DeletionTime?: \Aws\Api\DateTimeResult|null,
     *     StackStatus: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATE_COMPLETE'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_FAILED'|'ROLLBACK_COMPLETE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETE_COMPLETE'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE_CLEANUP_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|'UPDATE_ROLLBACK_IN_PROGRESS'|'UPDATE_ROLLBACK_FAILED'|'UPDATE_ROLLBACK_COMPLETE_CLEANUP_IN_PROGRESS'|'UPDATE_ROLLBACK_COMPLETE'|'REVIEW_IN_PROGRESS'|'IMPORT_IN_PROGRESS'|'IMPORT_COMPLETE'|'IMPORT_ROLLBACK_IN_PROGRESS'|'IMPORT_ROLLBACK_FAILED'|'IMPORT_ROLLBACK_COMPLETE',
     *     StackStatusReason?: string|null,
     *     ParentId?: string|null,
     *     RootId?: string|null,
     *     DriftInformation?: StackDriftInformationSummary|null,
     *     LastOperations?: list<OperationEntry>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
