<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListActors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $memoryId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListActorsRequest extends Request
{
    /**
     * @param array{
     *     memoryId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
