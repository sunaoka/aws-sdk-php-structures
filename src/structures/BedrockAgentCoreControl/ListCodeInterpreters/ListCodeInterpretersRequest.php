<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListCodeInterpreters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'SYSTEM'|'CUSTOM'|null $type
 */
class ListCodeInterpretersRequest extends Request
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
