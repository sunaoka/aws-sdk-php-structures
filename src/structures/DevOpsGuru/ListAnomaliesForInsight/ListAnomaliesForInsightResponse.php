<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListAnomaliesForInsight;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ProactiveAnomalySummary> $ProactiveAnomalies
 * @property list<Shapes\ReactiveAnomalySummary> $ReactiveAnomalies
 * @property string $NextToken
 */
class ListAnomaliesForInsightResponse extends Response
{
}
