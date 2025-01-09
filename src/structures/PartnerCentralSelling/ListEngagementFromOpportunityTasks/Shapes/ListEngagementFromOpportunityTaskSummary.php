<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementFromOpportunityTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
class ListEngagementFromOpportunityTaskSummary extends Shape
{
    /**
     * @param array{
     *     EngagementId?: string,
     *     EngagementInvitationId?: string,
     *     Message?: string,
     *     OpportunityId?: string,
     *     ReasonCode?: 'InvitationAccessDenied'|'InvitationValidationFailed'|'EngagementAccessDenied'|'OpportunityAccessDenied'|'ResourceSnapshotJobAccessDenied'|'ResourceSnapshotJobValidationFailed'|'ResourceSnapshotJobConflict'|'EngagementValidationFailed'|'EngagementConflict'|'OpportunitySubmissionFailed'|'EngagementInvitationConflict'|'OpportunityValidationFailed'|'OpportunityConflict'|'ResourceSnapshotAccessDenied'|'ResourceSnapshotValidationFailed'|'ResourceSnapshotConflict'|'InternalError'|'ServiceQuotaExceeded'|'RequestThrottled',
     *     ResourceSnapshotJobId?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     TaskArn?: string,
     *     TaskId?: string,
     *     TaskStatus?: 'IN_PROGRESS'|'COMPLETE'|'FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
