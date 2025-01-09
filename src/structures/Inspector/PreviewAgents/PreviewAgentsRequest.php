<?php

namespace Sunaoka\Aws\Structures\Inspector\PreviewAgents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $previewAgentsArn
 * @property string $nextToken
 * @property int $maxResults
 */
class PreviewAgentsRequest extends Request
{
    /**
     * @param array{
     *     previewAgentsArn: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
