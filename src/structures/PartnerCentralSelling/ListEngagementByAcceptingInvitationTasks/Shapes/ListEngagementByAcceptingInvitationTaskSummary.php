<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementByAcceptingInvitationTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EngagementInvitationId
 * @property string|null $Message
 * @property string|null $OpportunityId
 * @property 'InvitationAccessDenied'|'InvitationValidationFailed'|'EngagementAccessDenied'|'OpportunityAccessDenied'|'ResourceSnapshotJobAccessDenied'|'ResourceSnapshotJobValidationFailed'|'ResourceSnapshotJobConflict'|'EngagementValidationFailed'|'EngagementConflict'|'OpportunitySubmissionFailed'|'EngagementInvitationConflict'|'InternalError'|'OpportunityValidationFailed'|'OpportunityConflict'|'ResourceSnapshotAccessDenied'|'ResourceSnapshotValidationFailed'|'ResourceSnapshotConflict'|'ServiceQuotaExceeded'|'RequestThrottled'|null $ReasonCode
 * @property string|null $ResourceSnapshotJobId
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property string|null $TaskArn
 * @property string|null $TaskId
 * @property 'IN_PROGRESS'|'COMPLETE'|'FAILED'|null $TaskStatus
 */
class ListEngagementByAcceptingInvitationTaskSummary extends Shape
{
    /**
     * @param array{
     *     EngagementInvitationId?: string|null,
     *     Message?: string|null,
     *     OpportunityId?: string|null,
     *     ReasonCode?: 'InvitationAccessDenied'|'InvitationValidationFailed'|'EngagementAccessDenied'|'OpportunityAccessDenied'|'ResourceSnapshotJobAccessDenied'|'ResourceSnapshotJobValidationFailed'|'ResourceSnapshotJobConflict'|'EngagementValidationFailed'|'EngagementConflict'|'OpportunitySubmissionFailed'|'EngagementInvitationConflict'|'InternalError'|'OpportunityValidationFailed'|'OpportunityConflict'|'ResourceSnapshotAccessDenied'|'ResourceSnapshotValidationFailed'|'ResourceSnapshotConflict'|'ServiceQuotaExceeded'|'RequestThrottled'|null,
     *     ResourceSnapshotJobId?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     TaskArn?: string|null,
     *     TaskId?: string|null,
     *     TaskStatus?: 'IN_PROGRESS'|'COMPLETE'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
