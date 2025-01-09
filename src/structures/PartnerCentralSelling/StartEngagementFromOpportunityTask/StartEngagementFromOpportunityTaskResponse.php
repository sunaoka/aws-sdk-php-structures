<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\StartEngagementFromOpportunityTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $EngagementId
 * @property string $EngagementInvitationId
 * @property string $Message
 * @property string $OpportunityId
 * @property 'InvitationAccessDenied'|'InvitationValidationFailed'|'EngagementAccessDenied'|'OpportunityAccessDenied'|'ResourceSnapshotJobAccessDenied'|'ResourceSnapshotJobValidationFailed'|'ResourceSnapshotJobConflict'|'EngagementValidationFailed'|'EngagementConflict'|'OpportunitySubmissionFailed'|'EngagementInvitationConflict'|'OpportunityValidationFailed'|'OpportunityConflict'|'ResourceSnapshotAccessDenied'|'ResourceSnapshotValidationFailed'|'ResourceSnapshotConflict'|'InternalError'|'ServiceQuotaExceeded'|'RequestThrottled' $ReasonCode
 * @property string $ResourceSnapshotJobId
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property string $TaskArn
 * @property string $TaskId
 * @property 'IN_PROGRESS'|'COMPLETE'|'FAILED' $TaskStatus
 */
class StartEngagementFromOpportunityTaskResponse extends Response
{
}
