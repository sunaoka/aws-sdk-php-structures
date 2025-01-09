<?php

namespace Sunaoka\Aws\Structures\DataZone\Search;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'FORMS'|'TIME_SERIES_DATA_POINT_FORMS'> $additionalAttributes
 * @property string $domainIdentifier
 * @property Shapes\FilterClause $filters
 * @property int<1, 50> $maxResults
 * @property string $nextToken
 * @property string $owningProjectIdentifier
 * @property list<Shapes\SearchInItem> $searchIn
 * @property 'ASSET'|'GLOSSARY'|'GLOSSARY_TERM'|'DATA_PRODUCT' $searchScope
 * @property string $searchText
 * @property Shapes\SearchSort $sort
 */
class SearchRequest extends Request
{
    /**
     * @param array{
     *     additionalAttributes?: list<'FORMS'|'TIME_SERIES_DATA_POINT_FORMS'>,
     *     domainIdentifier: string,
     *     filters?: Shapes\FilterClause,
     *     maxResults?: int<1, 50>,
     *     nextToken?: string,
     *     owningProjectIdentifier?: string,
     *     searchIn?: list<Shapes\SearchInItem>,
     *     searchScope: 'ASSET'|'GLOSSARY'|'GLOSSARY_TERM'|'DATA_PRODUCT',
     *     searchText?: string,
     *     sort?: Shapes\SearchSort
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
