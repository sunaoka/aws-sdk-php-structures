<?php

namespace Sunaoka\Aws\Structures\QConnect\SearchSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property Shapes\SearchExpression $searchExpression
 */
class SearchSessionsRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     searchExpression: Shapes\SearchExpression
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
