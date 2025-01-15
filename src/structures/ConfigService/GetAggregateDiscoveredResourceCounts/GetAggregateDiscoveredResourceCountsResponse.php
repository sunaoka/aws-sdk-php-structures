<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetAggregateDiscoveredResourceCounts;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $TotalDiscoveredResources
 * @property string|null $GroupByKey
 * @property list<Shapes\GroupedResourceCount>|null $GroupedResourceCounts
 * @property string|null $NextToken
 */
class GetAggregateDiscoveredResourceCountsResponse extends Response
{
}
