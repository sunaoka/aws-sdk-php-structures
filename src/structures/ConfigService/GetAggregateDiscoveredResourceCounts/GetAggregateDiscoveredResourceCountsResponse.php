<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetAggregateDiscoveredResourceCounts;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $TotalDiscoveredResources
 * @property string $GroupByKey
 * @property list<Shapes\GroupedResourceCount> $GroupedResourceCounts
 * @property string $NextToken
 */
class GetAggregateDiscoveredResourceCountsResponse extends Response
{
}
