<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\SearchProducts;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ProductViewSummary>|null $ProductViewSummaries
 * @property array<string, list<Shapes\ProductViewAggregationValue>>|null $ProductViewAggregations
 * @property string|null $NextPageToken
 */
class SearchProductsResponse extends Response
{
}
