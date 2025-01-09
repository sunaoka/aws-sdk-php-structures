<?php

namespace Sunaoka\Aws\Structures\Iot\SearchIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $indexName
 * @property string $queryString
 * @property string $nextToken
 * @property int<1, max> $maxResults
 * @property string $queryVersion
 */
class SearchIndexRequest extends Request
{
    /**
     * @param array{
     *     indexName?: string,
     *     queryString: string,
     *     nextToken?: string,
     *     maxResults?: int<1, max>,
     *     queryVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
