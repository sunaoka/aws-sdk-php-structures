<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\SearchProducts;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ProductViewSummary> $ProductViewSummaries
 * @property array<string, list<Shapes\ProductViewAggregationValue>> $ProductViewAggregations
 * @property string $NextPageToken
 */
class SearchProductsResponse extends Response
{
}
