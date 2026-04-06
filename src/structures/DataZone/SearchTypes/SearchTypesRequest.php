<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property Shapes\FilterClause|null $filters
 * @property bool $managed
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 * @property list<Shapes\SearchInItem>|null $searchIn
 * @property 'ASSET_TYPE'|'FORM_TYPE'|'LINEAGE_NODE_TYPE' $searchScope
 * @property string|null $searchText
 * @property Shapes\SearchSort|null $sort
 */
class SearchTypesRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     filters?: Shapes\FilterClause|null,
     *     managed: bool,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null,
     *     searchIn?: list<Shapes\SearchInItem>|null,
     *     searchScope: 'ASSET_TYPE'|'FORM_TYPE'|'LINEAGE_NODE_TYPE',
     *     searchText?: string|null,
     *     sort?: Shapes\SearchSort|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
