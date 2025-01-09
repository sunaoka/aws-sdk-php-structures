<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCostAndUsage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $NextPageToken
 * @property list<Shapes\GroupDefinition> $GroupDefinitions
 * @property list<Shapes\ResultByTime> $ResultsByTime
 * @property list<Shapes\DimensionValuesWithAttributes> $DimensionValueAttributes
 */
class GetCostAndUsageResponse extends Response
{
}
