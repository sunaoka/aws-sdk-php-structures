<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property Shapes\FilterClause $filters
 * @property bool $managed
 * @property int $maxResults
 * @property string $nextToken
 * @property list<Shapes\SearchInItem> $searchIn
 * @property 'ASSET_TYPE'|'FORM_TYPE'|'LINEAGE_NODE_TYPE' $searchScope
 * @property string $searchText
 * @property Shapes\SearchSort $sort
 */
class SearchTypesRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     filters?: Shapes\FilterClause,
     *     managed: bool,
     *     maxResults?: int,
     *     nextToken?: string,
     *     searchIn?: list<Shapes\SearchInItem>,
     *     searchScope: 'ASSET_TYPE'|'FORM_TYPE'|'LINEAGE_NODE_TYPE',
     *     searchText?: string,
     *     sort?: Shapes\SearchSort
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
