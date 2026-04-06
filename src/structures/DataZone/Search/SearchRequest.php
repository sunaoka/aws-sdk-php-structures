<?php

namespace Sunaoka\Aws\Structures\DataZone\Search;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string|null $owningProjectIdentifier
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 * @property 'ASSET'|'GLOSSARY'|'GLOSSARY_TERM'|'DATA_PRODUCT' $searchScope
 * @property string|null $searchText
 * @property list<Shapes\SearchInItem>|null $searchIn
 * @property Shapes\FilterClause|null $filters
 * @property Shapes\SearchSort|null $sort
 * @property list<'FORMS'|'TIME_SERIES_DATA_POINT_FORMS'|'TEXT_MATCH_RATIONALE'>|null $additionalAttributes
 */
class SearchRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     owningProjectIdentifier?: string|null,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null,
     *     searchScope: 'ASSET'|'GLOSSARY'|'GLOSSARY_TERM'|'DATA_PRODUCT',
     *     searchText?: string|null,
     *     searchIn?: list<Shapes\SearchInItem>|null,
     *     filters?: Shapes\FilterClause|null,
     *     sort?: Shapes\SearchSort|null,
     *     additionalAttributes?: list<'FORMS'|'TIME_SERIES_DATA_POINT_FORMS'|'TEXT_MATCH_RATIONALE'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
