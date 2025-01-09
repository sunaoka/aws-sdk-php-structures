<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AgentIds
 * @property AgentHierarchyGroups $AgentHierarchyGroups
 * @property list<'VOICE'|'CHAT'|'TASK'|'EMAIL'> $Channels
 * @property ContactAnalysis $ContactAnalysis
 * @property list<'INBOUND'|'OUTBOUND'|'TRANSFER'|'QUEUE_TRANSFER'|'CALLBACK'|'API'|'DISCONNECT'|'MONITOR'|'EXTERNAL_OUTBOUND'|'WEBRTC_API'|'AGENT_REPLY'|'FLOW'> $InitiationMethods
 * @property list<string> $QueueIds
 * @property SearchableContactAttributes $SearchableContactAttributes
 * @property SearchableSegmentAttributes $SearchableSegmentAttributes
 */
class SearchCriteria extends Shape
{
    /**
     * @param array{
     *     AgentIds?: list<string>,
     *     AgentHierarchyGroups?: AgentHierarchyGroups,
     *     Channels?: list<'VOICE'|'CHAT'|'TASK'|'EMAIL'>,
     *     ContactAnalysis?: ContactAnalysis,
     *     InitiationMethods?: list<'INBOUND'|'OUTBOUND'|'TRANSFER'|'QUEUE_TRANSFER'|'CALLBACK'|'API'|'DISCONNECT'|'MONITOR'|'EXTERNAL_OUTBOUND'|'WEBRTC_API'|'AGENT_REPLY'|'FLOW'>,
     *     QueueIds?: list<string>,
     *     SearchableContactAttributes?: SearchableContactAttributes,
     *     SearchableSegmentAttributes?: SearchableSegmentAttributes
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
