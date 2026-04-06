<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListFlowAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowIdentifier
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListFlowAliasesRequest extends Request
{
    /**
     * @param array{
     *     flowIdentifier: string,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
