<?php

namespace Sunaoka\Aws\Structures\AgentDiscovery\SearchPublicRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $searchQuery
 * @property Shapes\SearchFilterExpression|null $filters
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class SearchPublicRecordsRequest extends Request
{
    /**
     * @param array{
     *     searchQuery?: string|null,
     *     filters?: Shapes\SearchFilterExpression|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
