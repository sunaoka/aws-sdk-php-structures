<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchListings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'FORMS'|'TIME_SERIES_DATA_POINT_FORMS'|'TEXT_MATCH_RATIONALE'>|null $additionalAttributes
 * @property list<Shapes\AggregationListItem>|null $aggregations
 * @property string $domainIdentifier
 * @property Shapes\FilterClause|null $filters
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 * @property list<Shapes\SearchInItem>|null $searchIn
 * @property string|null $searchText
 * @property Shapes\SearchSort|null $sort
 */
class SearchListingsRequest extends Request
{
    /**
     * @param array{
     *     additionalAttributes?: list<'FORMS'|'TIME_SERIES_DATA_POINT_FORMS'|'TEXT_MATCH_RATIONALE'>|null,
     *     aggregations?: list<Shapes\AggregationListItem>|null,
     *     domainIdentifier: string,
     *     filters?: Shapes\FilterClause|null,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null,
     *     searchIn?: list<Shapes\SearchInItem>|null,
     *     searchText?: string|null,
     *     sort?: Shapes\SearchSort|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
