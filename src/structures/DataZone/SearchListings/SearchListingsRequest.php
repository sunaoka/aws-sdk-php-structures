<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchListings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string|null $searchText
 * @property list<Shapes\SearchInItem>|null $searchIn
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\FilterClause|null $filters
 * @property list<Shapes\AggregationListItem>|null $aggregations
 * @property Shapes\SearchSort|null $sort
 * @property list<'FORMS'|'TIME_SERIES_DATA_POINT_FORMS'|'TEXT_MATCH_RATIONALE'>|null $additionalAttributes
 */
class SearchListingsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     searchText?: string|null,
     *     searchIn?: list<Shapes\SearchInItem>|null,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null,
     *     filters?: Shapes\FilterClause|null,
     *     aggregations?: list<Shapes\AggregationListItem>|null,
     *     sort?: Shapes\SearchSort|null,
     *     additionalAttributes?: list<'FORMS'|'TIME_SERIES_DATA_POINT_FORMS'|'TEXT_MATCH_RATIONALE'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
