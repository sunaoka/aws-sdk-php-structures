<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListPrompts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $promptIdentifier
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListPromptsRequest extends Request
{
    /**
     * @param array{
     *     promptIdentifier?: string|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
