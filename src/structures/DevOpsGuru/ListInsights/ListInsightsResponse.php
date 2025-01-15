<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListInsights;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ProactiveInsightSummary>|null $ProactiveInsights
 * @property list<Shapes\ReactiveInsightSummary>|null $ReactiveInsights
 * @property string|null $NextToken
 */
class ListInsightsResponse extends Response
{
}
