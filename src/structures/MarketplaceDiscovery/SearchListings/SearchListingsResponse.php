<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\SearchListings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int<0, max> $totalResults
 * @property list<Shapes\ListingSummary> $listingSummaries
 * @property string|null $nextToken
 */
class SearchListingsResponse extends Response
{
}
