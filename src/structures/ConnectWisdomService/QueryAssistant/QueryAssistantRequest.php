<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\QueryAssistant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string $queryText
 */
class QueryAssistantRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     queryText: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
