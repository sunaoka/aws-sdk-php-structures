<?php

namespace Sunaoka\Aws\Structures\MPA\ListApprovalTeams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property ApprovalStrategyResponse|null $ApprovalStrategy
 * @property int|null $NumberOfApprovers
 * @property string|null $Arn
 * @property string|null $Name
 * @property string|null $Description
 * @property 'ACTIVE'|'INACTIVE'|'DELETING'|'PENDING'|null $Status
 * @property 'VALIDATING'|'PENDING_ACTIVATION'|'FAILED_VALIDATION'|'FAILED_ACTIVATION'|'UPDATE_PENDING_APPROVAL'|'UPDATE_PENDING_ACTIVATION'|'UPDATE_FAILED_APPROVAL'|'UPDATE_FAILED_ACTIVATION'|'UPDATE_FAILED_VALIDATION'|'DELETE_PENDING_APPROVAL'|'DELETE_FAILED_APPROVAL'|'DELETE_FAILED_VALIDATION'|null $StatusCode
 * @property string|null $StatusMessage
 */
class ListApprovalTeamsResponseApprovalTeam extends Shape
{
    /**
     * @param array{
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     ApprovalStrategy?: ApprovalStrategyResponse|null,
     *     NumberOfApprovers?: int|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Status?: 'ACTIVE'|'INACTIVE'|'DELETING'|'PENDING'|null,
     *     StatusCode?: 'VALIDATING'|'PENDING_ACTIVATION'|'FAILED_VALIDATION'|'FAILED_ACTIVATION'|'UPDATE_PENDING_APPROVAL'|'UPDATE_PENDING_ACTIVATION'|'UPDATE_FAILED_APPROVAL'|'UPDATE_FAILED_ACTIVATION'|'UPDATE_FAILED_VALIDATION'|'DELETE_PENDING_APPROVAL'|'DELETE_FAILED_APPROVAL'|'DELETE_FAILED_VALIDATION'|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
