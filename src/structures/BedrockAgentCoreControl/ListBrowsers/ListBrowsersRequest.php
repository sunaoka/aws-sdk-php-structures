<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListBrowsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'SYSTEM'|'CUSTOM'|null $type
 */
class ListBrowsersRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     type?: 'SYSTEM'|'CUSTOM'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
