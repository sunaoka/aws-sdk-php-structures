<?php

namespace Sunaoka\Aws\Structures\MPA\GetSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $SessionArn
 * @property string|null $ApprovalTeamArn
 * @property string|null $ApprovalTeamName
 * @property string|null $ProtectedResourceArn
 * @property Shapes\ApprovalStrategyResponse|null $ApprovalStrategy
 * @property int|null $NumberOfApprovers
 * @property \Aws\Api\DateTimeResult|null $InitiationTime
 * @property \Aws\Api\DateTimeResult|null $ExpirationTime
 * @property \Aws\Api\DateTimeResult|null $CompletionTime
 * @property string|null $Description
 * @property array<string, string>|null $Metadata
 * @property 'PENDING'|'CANCELLED'|'APPROVED'|'FAILED'|'CREATING'|null $Status
 * @property 'REJECTED'|'EXPIRED'|'CONFIGURATION_CHANGED'|null $StatusCode
 * @property string|null $StatusMessage
 * @property 'EXECUTED'|'FAILED'|'PENDING'|null $ExecutionStatus
 * @property string|null $ActionName
 * @property string|null $RequesterServicePrincipal
 * @property string|null $RequesterPrincipalArn
 * @property string|null $RequesterAccountId
 * @property string|null $RequesterRegion
 * @property string|null $RequesterComment
 * @property 'AUTO_COMPLETION_UPON_APPROVAL'|null $ActionCompletionStrategy
 * @property list<Shapes\GetSessionResponseApproverResponse>|null $ApproverResponses
 */
class GetSessionResponse extends Response
{
}
