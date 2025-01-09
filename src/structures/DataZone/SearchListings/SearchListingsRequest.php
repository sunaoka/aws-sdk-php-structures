<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchListings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'FORMS'|'TIME_SERIES_DATA_POINT_FORMS'> $additionalAttributes
 * @property string $domainIdentifier
 * @property Shapes\FilterClause $filters
 * @property int $maxResults
 * @property string $nextToken
 * @property list<Shapes\SearchInItem> $searchIn
 * @property string $searchText
 * @property Shapes\SearchSort $sort
 */
class SearchListingsRequest extends Request
{
    /**
     * @param array{
     *     additionalAttributes?: list<'FORMS'|'TIME_SERIES_DATA_POINT_FORMS'>,
     *     domainIdentifier: string,
     *     filters?: Shapes\FilterClause,
     *     maxResults?: int,
     *     nextToken?: string,
     *     searchIn?: list<Shapes\SearchInItem>,
     *     searchText?: string,
     *     sort?: Shapes\SearchSort
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
