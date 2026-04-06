<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling;

class PartnerCentralSellingClient extends \Aws\PartnerCentralSelling\PartnerCentralSellingClient
{
    use AcceptEngagementInvitation\AcceptEngagementInvitationTrait;
    use AssignOpportunity\AssignOpportunityTrait;
    use AssociateOpportunity\AssociateOpportunityTrait;
    use CreateEngagement\CreateEngagementTrait;
    use CreateEngagementInvitation\CreateEngagementInvitationTrait;
    use CreateOpportunity\CreateOpportunityTrait;
    use CreateResourceSnapshot\CreateResourceSnapshotTrait;
    use CreateResourceSnapshotJob\CreateResourceSnapshotJobTrait;
    use DeleteResourceSnapshotJob\DeleteResourceSnapshotJobTrait;
    use DisassociateOpportunity\DisassociateOpportunityTrait;
    use GetAwsOpportunitySummary\GetAwsOpportunitySummaryTrait;
    use GetEngagement\GetEngagementTrait;
    use GetEngagementInvitation\GetEngagementInvitationTrait;
    use GetOpportunity\GetOpportunityTrait;
    use GetResourceSnapshot\GetResourceSnapshotTrait;
    use GetResourceSnapshotJob\GetResourceSnapshotJobTrait;
    use GetSellingSystemSettings\GetSellingSystemSettingsTrait;
    use ListEngagementByAcceptingInvitationTasks\ListEngagementByAcceptingInvitationTasksTrait;
    use ListEngagementFromOpportunityTasks\ListEngagementFromOpportunityTasksTrait;
    use ListEngagementInvitations\ListEngagementInvitationsTrait;
    use ListEngagementMembers\ListEngagementMembersTrait;
    use ListEngagementResourceAssociations\ListEngagementResourceAssociationsTrait;
    use ListEngagements\ListEngagementsTrait;
    use ListOpportunities\ListOpportunitiesTrait;
    use ListResourceSnapshotJobs\ListResourceSnapshotJobsTrait;
    use ListResourceSnapshots\ListResourceSnapshotsTrait;
    use ListSolutions\ListSolutionsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutSellingSystemSettings\PutSellingSystemSettingsTrait;
    use RejectEngagementInvitation\RejectEngagementInvitationTrait;
    use StartEngagementByAcceptingInvitationTask\StartEngagementByAcceptingInvitationTaskTrait;
    use StartEngagementFromOpportunityTask\StartEngagementFromOpportunityTaskTrait;
    use StartResourceSnapshotJob\StartResourceSnapshotJobTrait;
    use StopResourceSnapshotJob\StopResourceSnapshotJobTrait;
    use SubmitOpportunity\SubmitOpportunityTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateOpportunity\UpdateOpportunityTrait;
}
