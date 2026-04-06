<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCostAndUsageComparisons;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\CostAndUsageComparison>|null $CostAndUsageComparisons
 * @property array<string, Shapes\ComparisonMetricValue>|null $TotalCostAndUsage
 * @property string|null $NextPageToken
 */
class GetCostAndUsageComparisonsResponse extends Response
{
}
