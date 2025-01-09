<?php

namespace Sunaoka\Aws\Structures\CloudSearchDomain\Search;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cursor
 * @property string $expr
 * @property string $facet
 * @property string $filterQuery
 * @property string $highlight
 * @property bool $partial
 * @property string $query
 * @property string $queryOptions
 * @property 'simple'|'structured'|'lucene'|'dismax' $queryParser
 * @property string $return
 * @property int $size
 * @property string $sort
 * @property int $start
 * @property string $stats
 */
class SearchRequest extends Request
{
    /**
     * @param array{
     *     cursor?: string,
     *     expr?: string,
     *     facet?: string,
     *     filterQuery?: string,
     *     highlight?: string,
     *     partial?: bool,
     *     query: string,
     *     queryOptions?: string,
     *     queryParser?: 'simple'|'structured'|'lucene'|'dismax',
     *     return?: string,
     *     size?: int,
     *     sort?: string,
     *     start?: int,
     *     stats?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
