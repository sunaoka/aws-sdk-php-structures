<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListPromptRouters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property 'custom'|'default'|null $type
 */
class ListPromptRoutersRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     type?: 'custom'|'default'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
