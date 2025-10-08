<?php

namespace Sunaoka\Aws\Structures\MPA\GetApprovalTeam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VersionId
 * @property string|null $Description
 * @property ApprovalStrategyResponse|null $ApprovalStrategy
 * @property int|null $NumberOfApprovers
 * @property 'ACTIVE'|'INACTIVE'|'DELETING'|'PENDING'|null $Status
 * @property 'VALIDATING'|'PENDING_ACTIVATION'|'FAILED_VALIDATION'|'FAILED_ACTIVATION'|'UPDATE_PENDING_APPROVAL'|'UPDATE_PENDING_ACTIVATION'|'UPDATE_FAILED_APPROVAL'|'UPDATE_FAILED_ACTIVATION'|'UPDATE_FAILED_VALIDATION'|'DELETE_PENDING_APPROVAL'|'DELETE_FAILED_APPROVAL'|'DELETE_FAILED_VALIDATION'|null $StatusCode
 * @property string|null $StatusMessage
 * @property list<GetApprovalTeamResponseApprover>|null $Approvers
 * @property \Aws\Api\DateTimeResult|null $UpdateInitiationTime
 */
class PendingUpdate extends Shape
{
    /**
     * @param array{
     *     VersionId?: string|null,
     *     Description?: string|null,
     *     ApprovalStrategy?: ApprovalStrategyResponse|null,
     *     NumberOfApprovers?: int|null,
     *     Status?: 'ACTIVE'|'INACTIVE'|'DELETING'|'PENDING'|null,
     *     StatusCode?: 'VALIDATING'|'PENDING_ACTIVATION'|'FAILED_VALIDATION'|'FAILED_ACTIVATION'|'UPDATE_PENDING_APPROVAL'|'UPDATE_PENDING_ACTIVATION'|'UPDATE_FAILED_APPROVAL'|'UPDATE_FAILED_ACTIVATION'|'UPDATE_FAILED_VALIDATION'|'DELETE_PENDING_APPROVAL'|'DELETE_FAILED_APPROVAL'|'DELETE_FAILED_VALIDATION'|null,
     *     StatusMessage?: string|null,
     *     Approvers?: list<GetApprovalTeamResponseApprover>|null,
     *     UpdateInitiationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
