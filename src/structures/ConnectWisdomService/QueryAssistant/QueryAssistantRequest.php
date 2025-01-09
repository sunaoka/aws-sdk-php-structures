<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\QueryAssistant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property int $maxResults
 * @property string $nextToken
 * @property string $queryText
 */
class QueryAssistantRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     queryText: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
