<?php

namespace Sunaoka\Aws\Structures\MPA\GetApprovalTeam;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property Shapes\ApprovalStrategyResponse|null $ApprovalStrategy
 * @property int|null $NumberOfApprovers
 * @property list<Shapes\GetApprovalTeamResponseApprover>|null $Approvers
 * @property string|null $Arn
 * @property string|null $Description
 * @property string|null $Name
 * @property 'ACTIVE'|'INACTIVE'|'DELETING'|'PENDING'|null $Status
 * @property 'VALIDATING'|'PENDING_ACTIVATION'|'FAILED_VALIDATION'|'FAILED_ACTIVATION'|'UPDATE_PENDING_APPROVAL'|'UPDATE_PENDING_ACTIVATION'|'UPDATE_FAILED_APPROVAL'|'UPDATE_FAILED_ACTIVATION'|'UPDATE_FAILED_VALIDATION'|'DELETE_PENDING_APPROVAL'|'DELETE_FAILED_APPROVAL'|'DELETE_FAILED_VALIDATION'|null $StatusCode
 * @property string|null $StatusMessage
 * @property string|null $UpdateSessionArn
 * @property string|null $VersionId
 * @property list<Shapes\PolicyReference>|null $Policies
 * @property \Aws\Api\DateTimeResult|null $LastUpdateTime
 * @property Shapes\PendingUpdate|null $PendingUpdate
 */
class GetApprovalTeamResponse extends Response
{
}
