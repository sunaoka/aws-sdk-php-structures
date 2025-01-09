<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListInsights;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ProactiveInsightSummary> $ProactiveInsights
 * @property list<Shapes\ReactiveInsightSummary> $ReactiveInsights
 * @property string $NextToken
 */
class ListInsightsResponse extends Response
{
}
