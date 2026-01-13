<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 * @property 'ASSET_TYPE'|'FORM_TYPE'|'LINEAGE_NODE_TYPE' $searchScope
 * @property string|null $searchText
 * @property list<Shapes\SearchInItem>|null $searchIn
 * @property Shapes\FilterClause|null $filters
 * @property Shapes\SearchSort|null $sort
 * @property bool $managed
 */
class SearchTypesRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null,
     *     searchScope: 'ASSET_TYPE'|'FORM_TYPE'|'LINEAGE_NODE_TYPE',
     *     searchText?: string|null,
     *     searchIn?: list<Shapes\SearchInItem>|null,
     *     filters?: Shapes\FilterClause|null,
     *     sort?: Shapes\SearchSort|null,
     *     managed: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
