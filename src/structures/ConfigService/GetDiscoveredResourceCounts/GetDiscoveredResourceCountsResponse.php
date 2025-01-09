<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetDiscoveredResourceCounts;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $totalDiscoveredResources
 * @property list<Shapes\ResourceCount> $resourceCounts
 * @property string $nextToken
 */
class GetDiscoveredResourceCountsResponse extends Response
{
}
