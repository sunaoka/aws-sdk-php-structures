<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesTrendsV2;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Daily'|'Weekly'|'Monthly' $Granularity
 * @property list<Shapes\ResourcesTrendsMetricsResult> $TrendsMetrics
 * @property string|null $NextToken
 */
class GetResourcesTrendsV2Response extends Response
{
}
