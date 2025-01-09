<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\SearchSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property int $maxResults
 * @property string $nextToken
 * @property Shapes\SearchExpression $searchExpression
 */
class SearchSessionsRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     searchExpression: Shapes\SearchExpression
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
