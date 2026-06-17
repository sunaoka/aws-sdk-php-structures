<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListThreats;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $threatJobId
 * @property string $agentSpaceId
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListThreatsRequest extends Request
{
    /**
     * @param array{
     *     threatJobId: string,
     *     agentSpaceId: string,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
