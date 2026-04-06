<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackRefactors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StackRefactorId
 * @property string|null $Description
 * @property 'UNAVAILABLE'|'AVAILABLE'|'OBSOLETE'|'EXECUTE_IN_PROGRESS'|'EXECUTE_COMPLETE'|'EXECUTE_FAILED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_COMPLETE'|'ROLLBACK_FAILED'|null $ExecutionStatus
 * @property string|null $ExecutionStatusReason
 * @property 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED'|null $Status
 * @property string|null $StatusReason
 */
class StackRefactorSummary extends Shape
{
    /**
     * @param array{
     *     StackRefactorId?: string|null,
     *     Description?: string|null,
     *     ExecutionStatus?: 'UNAVAILABLE'|'AVAILABLE'|'OBSOLETE'|'EXECUTE_IN_PROGRESS'|'EXECUTE_COMPLETE'|'EXECUTE_FAILED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_COMPLETE'|'ROLLBACK_FAILED'|null,
     *     ExecutionStatusReason?: string|null,
     *     Status?: 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED'|null,
     *     StatusReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
