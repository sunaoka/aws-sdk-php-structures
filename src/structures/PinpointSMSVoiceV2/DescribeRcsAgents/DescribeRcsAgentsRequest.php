<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRcsAgents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $RcsAgentIds
 * @property 'SELF'|'SHARED'|null $Owner
 * @property list<Shapes\RcsAgentFilter>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class DescribeRcsAgentsRequest extends Request
{
    /**
     * @param array{
     *     RcsAgentIds?: list<string>|null,
     *     Owner?: 'SELF'|'SHARED'|null,
     *     Filters?: list<Shapes\RcsAgentFilter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
