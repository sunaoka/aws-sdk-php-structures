<?php

namespace Sunaoka\Aws\Structures\DataZone\Search;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'FORMS'|'TIME_SERIES_DATA_POINT_FORMS'>|null $additionalAttributes
 * @property string $domainIdentifier
 * @property Shapes\FilterClause|null $filters
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $owningProjectIdentifier
 * @property list<Shapes\SearchInItem>|null $searchIn
 * @property 'ASSET'|'GLOSSARY'|'GLOSSARY_TERM'|'DATA_PRODUCT' $searchScope
 * @property string|null $searchText
 * @property Shapes\SearchSort|null $sort
 */
class SearchRequest extends Request
{
    /**
     * @param array{
     *     additionalAttributes?: list<'FORMS'|'TIME_SERIES_DATA_POINT_FORMS'>|null,
     *     domainIdentifier: string,
     *     filters?: Shapes\FilterClause|null,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null,
     *     owningProjectIdentifier?: string|null,
     *     searchIn?: list<Shapes\SearchInItem>|null,
     *     searchScope: 'ASSET'|'GLOSSARY'|'GLOSSARY_TERM'|'DATA_PRODUCT',
     *     searchText?: string|null,
     *     sort?: Shapes\SearchSort|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
