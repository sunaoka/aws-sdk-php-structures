<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\StartEngagementFromOpportunityTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $EngagementId
 * @property string|null $EngagementInvitationId
 * @property string|null $Message
 * @property string|null $OpportunityId
 * @property 'InvitationAccessDenied'|'InvitationValidationFailed'|'EngagementAccessDenied'|'OpportunityAccessDenied'|'ResourceSnapshotJobAccessDenied'|'ResourceSnapshotJobValidationFailed'|'ResourceSnapshotJobConflict'|'EngagementValidationFailed'|'EngagementConflict'|'OpportunitySubmissionFailed'|'EngagementInvitationConflict'|'OpportunityValidationFailed'|'OpportunityConflict'|'ResourceSnapshotAccessDenied'|'ResourceSnapshotValidationFailed'|'ResourceSnapshotConflict'|'InternalError'|'ServiceQuotaExceeded'|'RequestThrottled'|null $ReasonCode
 * @property string|null $ResourceSnapshotJobId
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property string|null $TaskArn
 * @property string|null $TaskId
 * @property 'IN_PROGRESS'|'COMPLETE'|'FAILED'|null $TaskStatus
 */
class StartEngagementFromOpportunityTaskResponse extends Response
{
}
