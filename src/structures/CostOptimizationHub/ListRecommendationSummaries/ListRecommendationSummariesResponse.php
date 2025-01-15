<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\ListRecommendationSummaries;

use Sunaoka\Aws\Structures\Response;

/**
 * @property double|null $estimatedTotalDedupedSavings
 * @property list<Shapes\RecommendationSummary>|null $items
 * @property string|null $groupBy
 * @property string|null $currencyCode
 * @property Shapes\SummaryMetricsResult|null $metrics
 * @property string|null $nextToken
 */
class ListRecommendationSummariesResponse extends Response
{
}
