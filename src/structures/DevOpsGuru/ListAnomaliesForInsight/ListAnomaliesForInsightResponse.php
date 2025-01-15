<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListAnomaliesForInsight;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ProactiveAnomalySummary>|null $ProactiveAnomalies
 * @property list<Shapes\ReactiveAnomalySummary>|null $ReactiveAnomalies
 * @property string|null $NextToken
 */
class ListAnomaliesForInsightResponse extends Response
{
}
