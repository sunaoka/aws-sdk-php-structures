<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AgentIds
 * @property AgentHierarchyGroups|null $AgentHierarchyGroups
 * @property list<'VOICE'|'CHAT'|'TASK'|'EMAIL'>|null $Channels
 * @property ContactAnalysis|null $ContactAnalysis
 * @property list<'INBOUND'|'OUTBOUND'|'TRANSFER'|'QUEUE_TRANSFER'|'CALLBACK'|'API'|'DISCONNECT'|'MONITOR'|'EXTERNAL_OUTBOUND'|'WEBRTC_API'|'AGENT_REPLY'|'FLOW'>|null $InitiationMethods
 * @property list<string>|null $QueueIds
 * @property SearchableContactAttributes|null $SearchableContactAttributes
 * @property SearchableSegmentAttributes|null $SearchableSegmentAttributes
 */
class SearchCriteria extends Shape
{
    /**
     * @param array{
     *     AgentIds?: list<string>|null,
     *     AgentHierarchyGroups?: AgentHierarchyGroups|null,
     *     Channels?: list<'VOICE'|'CHAT'|'TASK'|'EMAIL'>|null,
     *     ContactAnalysis?: ContactAnalysis|null,
     *     InitiationMethods?: list<'INBOUND'|'OUTBOUND'|'TRANSFER'|'QUEUE_TRANSFER'|'CALLBACK'|'API'|'DISCONNECT'|'MONITOR'|'EXTERNAL_OUTBOUND'|'WEBRTC_API'|'AGENT_REPLY'|'FLOW'>|null,
     *     QueueIds?: list<string>|null,
     *     SearchableContactAttributes?: SearchableContactAttributes|null,
     *     SearchableSegmentAttributes?: SearchableSegmentAttributes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
