<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactFlows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property list<'CONTACT_FLOW'|'CUSTOMER_QUEUE'|'CUSTOMER_HOLD'|'CUSTOMER_WHISPER'|'AGENT_HOLD'|'AGENT_WHISPER'|'OUTBOUND_WHISPER'|'AGENT_TRANSFER'|'QUEUE_TRANSFER'>|null $ContactFlowTypes
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListContactFlowsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactFlowTypes?: list<'CONTACT_FLOW'|'CUSTOMER_QUEUE'|'CUSTOMER_HOLD'|'CUSTOMER_WHISPER'|'AGENT_HOLD'|'AGENT_WHISPER'|'OUTBOUND_WHISPER'|'AGENT_TRANSFER'|'QUEUE_TRANSFER'>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
