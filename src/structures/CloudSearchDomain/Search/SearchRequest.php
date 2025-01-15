<?php

namespace Sunaoka\Aws\Structures\CloudSearchDomain\Search;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $cursor
 * @property string|null $expr
 * @property string|null $facet
 * @property string|null $filterQuery
 * @property string|null $highlight
 * @property bool|null $partial
 * @property string $query
 * @property string|null $queryOptions
 * @property 'simple'|'structured'|'lucene'|'dismax'|null $queryParser
 * @property string|null $return
 * @property int|null $size
 * @property string|null $sort
 * @property int|null $start
 * @property string|null $stats
 */
class SearchRequest extends Request
{
    /**
     * @param array{
     *     cursor?: string|null,
     *     expr?: string|null,
     *     facet?: string|null,
     *     filterQuery?: string|null,
     *     highlight?: string|null,
     *     partial?: bool|null,
     *     query: string,
     *     queryOptions?: string|null,
     *     queryParser?: 'simple'|'structured'|'lucene'|'dismax'|null,
     *     return?: string|null,
     *     size?: int|null,
     *     sort?: string|null,
     *     start?: int|null,
     *     stats?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
