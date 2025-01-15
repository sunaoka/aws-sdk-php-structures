<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\SearchSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\SearchExpression $searchExpression
 */
class SearchSessionsRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     searchExpression: Shapes\SearchExpression
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
