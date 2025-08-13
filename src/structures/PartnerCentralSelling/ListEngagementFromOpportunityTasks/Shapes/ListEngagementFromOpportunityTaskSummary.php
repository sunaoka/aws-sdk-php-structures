<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementFromOpportunityTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TaskId
 * @property string|null $TaskArn
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property 'IN_PROGRESS'|'COMPLETE'|'FAILED'|null $TaskStatus
 * @property string|null $Message
 * @property 'InvitationAccessDenied'|'InvitationValidationFailed'|'EngagementAccessDenied'|'OpportunityAccessDenied'|'ResourceSnapshotJobAccessDenied'|'ResourceSnapshotJobValidationFailed'|'ResourceSnapshotJobConflict'|'EngagementValidationFailed'|'EngagementConflict'|'OpportunitySubmissionFailed'|'EngagementInvitationConflict'|'InternalError'|'OpportunityValidationFailed'|'OpportunityConflict'|'ResourceSnapshotAccessDenied'|'ResourceSnapshotValidationFailed'|'ResourceSnapshotConflict'|'ServiceQuotaExceeded'|'RequestThrottled'|null $ReasonCode
 * @property string|null $OpportunityId
 * @property string|null $ResourceSnapshotJobId
 * @property string|null $EngagementId
 * @property string|null $EngagementInvitationId
 */
class ListEngagementFromOpportunityTaskSummary extends Shape
{
    /**
     * @param array{
     *     TaskId?: string|null,
     *     TaskArn?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     TaskStatus?: 'IN_PROGRESS'|'COMPLETE'|'FAILED'|null,
     *     Message?: string|null,
     *     ReasonCode?: 'InvitationAccessDenied'|'InvitationValidationFailed'|'EngagementAccessDenied'|'OpportunityAccessDenied'|'ResourceSnapshotJobAccessDenied'|'ResourceSnapshotJobValidationFailed'|'ResourceSnapshotJobConflict'|'EngagementValidationFailed'|'EngagementConflict'|'OpportunitySubmissionFailed'|'EngagementInvitationConflict'|'InternalError'|'OpportunityValidationFailed'|'OpportunityConflict'|'ResourceSnapshotAccessDenied'|'ResourceSnapshotValidationFailed'|'ResourceSnapshotConflict'|'ServiceQuotaExceeded'|'RequestThrottled'|null,
     *     OpportunityId?: string|null,
     *     ResourceSnapshotJobId?: string|null,
     *     EngagementId?: string|null,
     *     EngagementInvitationId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
