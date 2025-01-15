<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCostAndUsage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextPageToken
 * @property list<Shapes\GroupDefinition>|null $GroupDefinitions
 * @property list<Shapes\ResultByTime>|null $ResultsByTime
 * @property list<Shapes\DimensionValuesWithAttributes>|null $DimensionValueAttributes
 */
class GetCostAndUsageResponse extends Response
{
}
