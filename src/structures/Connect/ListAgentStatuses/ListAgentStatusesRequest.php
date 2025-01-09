<?php

namespace Sunaoka\Aws\Structures\Connect\ListAgentStatuses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 * @property list<'ROUTABLE'|'CUSTOM'|'OFFLINE'> $AgentStatusTypes
 */
class ListAgentStatusesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>,
     *     AgentStatusTypes?: list<'ROUTABLE'|'CUSTOM'|'OFFLINE'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
