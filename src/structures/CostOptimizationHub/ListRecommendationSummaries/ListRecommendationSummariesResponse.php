<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\ListRecommendationSummaries;

use Sunaoka\Aws\Structures\Response;

/**
 * @property double $estimatedTotalDedupedSavings
 * @property list<Shapes\RecommendationSummary> $items
 * @property string $groupBy
 * @property string $currencyCode
 * @property Shapes\SummaryMetricsResult $metrics
 * @property string $nextToken
 */
class ListRecommendationSummariesResponse extends Response
{
}
