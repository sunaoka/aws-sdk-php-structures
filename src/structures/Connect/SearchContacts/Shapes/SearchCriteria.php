<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NameCriteria|null $Name
 * @property list<string>|null $AgentIds
 * @property AgentHierarchyGroups|null $AgentHierarchyGroups
 * @property list<'VOICE'|'CHAT'|'TASK'|'EMAIL'>|null $Channels
 * @property ContactAnalysis|null $ContactAnalysis
 * @property list<'INBOUND'|'OUTBOUND'|'TRANSFER'|'QUEUE_TRANSFER'|'CALLBACK'|'API'|'DISCONNECT'|'MONITOR'|'EXTERNAL_OUTBOUND'|'WEBRTC_API'|'AGENT_REPLY'|'FLOW'>|null $InitiationMethods
 * @property list<string>|null $QueueIds
 * @property SearchableRoutingCriteria|null $RoutingCriteria
 * @property SearchContactsAdditionalTimeRange|null $AdditionalTimeRange
 * @property SearchableContactAttributes|null $SearchableContactAttributes
 * @property SearchableSegmentAttributes|null $SearchableSegmentAttributes
 * @property list<string>|null $ActiveRegions
 */
class SearchCriteria extends Shape
{
    /**
     * @param array{
     *     Name?: NameCriteria|null,
     *     AgentIds?: list<string>|null,
     *     AgentHierarchyGroups?: AgentHierarchyGroups|null,
     *     Channels?: list<'VOICE'|'CHAT'|'TASK'|'EMAIL'>|null,
     *     ContactAnalysis?: ContactAnalysis|null,
     *     InitiationMethods?: list<'INBOUND'|'OUTBOUND'|'TRANSFER'|'QUEUE_TRANSFER'|'CALLBACK'|'API'|'DISCONNECT'|'MONITOR'|'EXTERNAL_OUTBOUND'|'WEBRTC_API'|'AGENT_REPLY'|'FLOW'>|null,
     *     QueueIds?: list<string>|null,
     *     RoutingCriteria?: SearchableRoutingCriteria|null,
     *     AdditionalTimeRange?: SearchContactsAdditionalTimeRange|null,
     *     SearchableContactAttributes?: SearchableContactAttributes|null,
     *     SearchableSegmentAttributes?: SearchableSegmentAttributes|null,
     *     ActiveRegions?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
