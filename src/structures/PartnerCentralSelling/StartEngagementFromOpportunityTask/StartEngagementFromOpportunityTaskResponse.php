<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\StartEngagementFromOpportunityTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TaskId
 * @property string|null $TaskArn
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property 'IN_PROGRESS'|'COMPLETE'|'FAILED'|null $TaskStatus
 * @property string|null $Message
 * @property 'InvitationAccessDenied'|'InvitationValidationFailed'|'EngagementAccessDenied'|'OpportunityAccessDenied'|'ResourceSnapshotJobAccessDenied'|'ResourceSnapshotJobValidationFailed'|'ResourceSnapshotJobConflict'|'EngagementValidationFailed'|'EngagementConflict'|'OpportunitySubmissionFailed'|'EngagementInvitationConflict'|'InternalError'|'OpportunityValidationFailed'|'OpportunityConflict'|'ResourceSnapshotAccessDenied'|'ResourceSnapshotValidationFailed'|'ResourceSnapshotConflict'|'ServiceQuotaExceeded'|'RequestThrottled'|'ContextNotFound'|'CustomerProjectContextNotPermitted'|'DisqualifiedLeadNotPermitted'|null $ReasonCode
 * @property string|null $OpportunityId
 * @property string|null $ResourceSnapshotJobId
 * @property string|null $EngagementId
 * @property string|null $EngagementInvitationId
 */
class StartEngagementFromOpportunityTaskResponse extends Response
{
}
