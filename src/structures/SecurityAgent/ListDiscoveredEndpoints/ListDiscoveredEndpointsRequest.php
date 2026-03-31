<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListDiscoveredEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $maxResults
 * @property string $pentestJobId
 * @property string $agentSpaceId
 * @property string|null $prefix
 * @property string|null $nextToken
 */
class ListDiscoveredEndpointsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int|null,
     *     pentestJobId: string,
     *     agentSpaceId: string,
     *     prefix?: string|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
