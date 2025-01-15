<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCostAndUsageWithResources;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextPageToken
 * @property list<Shapes\GroupDefinition>|null $GroupDefinitions
 * @property list<Shapes\ResultByTime>|null $ResultsByTime
 * @property list<Shapes\DimensionValuesWithAttributes>|null $DimensionValueAttributes
 */
class GetCostAndUsageWithResourcesResponse extends Response
{
}
