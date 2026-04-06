<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchListings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\SearchResultItem>|null $items
 * @property string|null $nextToken
 * @property int|null $totalMatchCount
 * @property list<Shapes\AggregationOutput>|null $aggregates
 */
class SearchListingsResponse extends Response
{
}
