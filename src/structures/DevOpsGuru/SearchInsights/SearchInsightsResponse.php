<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\SearchInsights;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ProactiveInsightSummary>|null $ProactiveInsights
 * @property list<Shapes\ReactiveInsightSummary>|null $ReactiveInsights
 * @property string|null $NextToken
 */
class SearchInsightsResponse extends Response
{
}
