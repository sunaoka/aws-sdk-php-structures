<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactFlows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property list<'CONTACT_FLOW'|'CUSTOMER_QUEUE'|'CUSTOMER_HOLD'|'CUSTOMER_WHISPER'|'AGENT_HOLD'|'AGENT_WHISPER'|'OUTBOUND_WHISPER'|'AGENT_TRANSFER'|'QUEUE_TRANSFER'> $ContactFlowTypes
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListContactFlowsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactFlowTypes?: list<'CONTACT_FLOW'|'CUSTOMER_QUEUE'|'CUSTOMER_HOLD'|'CUSTOMER_WHISPER'|'AGENT_HOLD'|'AGENT_WHISPER'|'OUTBOUND_WHISPER'|'AGENT_TRANSFER'|'QUEUE_TRANSFER'>,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
