<?php

namespace Sunaoka\Aws\Structures\QConnect\SearchSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property string $assistantId
 * @property Shapes\SearchExpression $searchExpression
 */
class SearchSessionsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     assistantId: string,
     *     searchExpression: Shapes\SearchExpression
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
