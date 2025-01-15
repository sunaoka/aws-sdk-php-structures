<?php

namespace Sunaoka\Aws\Structures\Iot\SearchIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $indexName
 * @property string $queryString
 * @property string|null $nextToken
 * @property int<1, max>|null $maxResults
 * @property string|null $queryVersion
 */
class SearchIndexRequest extends Request
{
    /**
     * @param array{
     *     indexName?: string|null,
     *     queryString: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, max>|null,
     *     queryVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
