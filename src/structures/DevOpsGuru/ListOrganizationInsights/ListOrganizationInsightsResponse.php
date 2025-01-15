<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListOrganizationInsights;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ProactiveOrganizationInsightSummary>|null $ProactiveInsights
 * @property list<Shapes\ReactiveOrganizationInsightSummary>|null $ReactiveInsights
 * @property string|null $NextToken
 */
class ListOrganizationInsightsResponse extends Response
{
}
