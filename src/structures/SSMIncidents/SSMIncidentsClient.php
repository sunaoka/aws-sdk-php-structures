<?php

namespace Sunaoka\Aws\Structures\SSMIncidents;

class SSMIncidentsClient extends \Aws\SSMIncidents\SSMIncidentsClient
{
    use BatchGetIncidentFindings\BatchGetIncidentFindingsTrait;
    use CreateReplicationSet\CreateReplicationSetTrait;
    use CreateResponsePlan\CreateResponsePlanTrait;
    use CreateTimelineEvent\CreateTimelineEventTrait;
    use DeleteIncidentRecord\DeleteIncidentRecordTrait;
    use DeleteReplicationSet\DeleteReplicationSetTrait;
    use DeleteResourcePolicy\DeleteResourcePolicyTrait;
    use DeleteResponsePlan\DeleteResponsePlanTrait;
    use DeleteTimelineEvent\DeleteTimelineEventTrait;
    use GetIncidentRecord\GetIncidentRecordTrait;
    use GetReplicationSet\GetReplicationSetTrait;
    use GetResourcePolicies\GetResourcePoliciesTrait;
    use GetResponsePlan\GetResponsePlanTrait;
    use GetTimelineEvent\GetTimelineEventTrait;
    use ListIncidentFindings\ListIncidentFindingsTrait;
    use ListIncidentRecords\ListIncidentRecordsTrait;
    use ListRelatedItems\ListRelatedItemsTrait;
    use ListReplicationSets\ListReplicationSetsTrait;
    use ListResponsePlans\ListResponsePlansTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTimelineEvents\ListTimelineEventsTrait;
    use PutResourcePolicy\PutResourcePolicyTrait;
    use StartIncident\StartIncidentTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateDeletionProtection\UpdateDeletionProtectionTrait;
    use UpdateIncidentRecord\UpdateIncidentRecordTrait;
    use UpdateRelatedItems\UpdateRelatedItemsTrait;
    use UpdateReplicationSet\UpdateReplicationSetTrait;
    use UpdateResponsePlan\UpdateResponsePlanTrait;
    use UpdateTimelineEvent\UpdateTimelineEventTrait;
}
