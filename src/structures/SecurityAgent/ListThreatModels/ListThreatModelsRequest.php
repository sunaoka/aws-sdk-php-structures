<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListThreatModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $maxResults
 * @property string|null $nextToken
 * @property string $agentSpaceId
 */
class ListThreatModelsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int|null,
     *     nextToken?: string|null,
     *     agentSpaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
