<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListOrganizationInsights;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ProactiveOrganizationInsightSummary> $ProactiveInsights
 * @property list<Shapes\ReactiveOrganizationInsightSummary> $ReactiveInsights
 * @property string $NextToken
 */
class ListOrganizationInsightsResponse extends Response
{
}
