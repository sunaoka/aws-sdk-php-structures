<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementByAcceptingInvitationTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
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
class ListEngagementByAcceptingInvitationTaskSummary extends Shape
{
    /**
     * @param array{
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
