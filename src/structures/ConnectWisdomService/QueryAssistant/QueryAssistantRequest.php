<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\QueryAssistant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property string $queryText
 */
class QueryAssistantRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     queryText: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
