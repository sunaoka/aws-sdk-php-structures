<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\SearchInsights;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ProactiveInsightSummary> $ProactiveInsights
 * @property list<Shapes\ReactiveInsightSummary> $ReactiveInsights
 * @property string $NextToken
 */
class SearchInsightsResponse extends Response
{
}
