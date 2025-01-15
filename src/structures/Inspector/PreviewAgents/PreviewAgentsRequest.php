<?php

namespace Sunaoka\Aws\Structures\Inspector\PreviewAgents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $previewAgentsArn
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class PreviewAgentsRequest extends Request
{
    /**
     * @param array{
     *     previewAgentsArn: string,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
