<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingsTrendsV2;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Daily'|'Weekly'|'Monthly' $Granularity
 * @property list<Shapes\TrendsMetricsResult> $TrendsMetrics
 * @property string|null $NextToken
 */
class GetFindingsTrendsV2Response extends Response
{
}
