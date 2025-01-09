<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeAgents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $agentIds
 * @property list<Shapes\Filter> $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class DescribeAgentsRequest extends Request
{
    /**
     * @param array{
     *     agentIds?: list<string>,
     *     filters?: list<Shapes\Filter>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
