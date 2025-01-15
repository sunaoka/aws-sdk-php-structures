<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\SearchOrganizationInsights;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ProactiveInsightSummary>|null $ProactiveInsights
 * @property list<Shapes\ReactiveInsightSummary>|null $ReactiveInsights
 * @property string|null $NextToken
 */
class SearchOrganizationInsightsResponse extends Response
{
}
