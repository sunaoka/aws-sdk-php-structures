<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListArtifacts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListArtifactsRequest extends Request
{
    /**
     * @param array{
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
