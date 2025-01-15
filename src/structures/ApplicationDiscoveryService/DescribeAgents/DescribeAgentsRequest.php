<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeAgents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $agentIds
 * @property list<Shapes\Filter>|null $filters
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class DescribeAgentsRequest extends Request
{
    /**
     * @param array{
     *     agentIds?: list<string>|null,
     *     filters?: list<Shapes\Filter>|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
