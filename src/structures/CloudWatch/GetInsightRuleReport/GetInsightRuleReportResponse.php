<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetInsightRuleReport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string> $KeyLabels
 * @property string $AggregationStatistic
 * @property double $AggregateValue
 * @property int $ApproximateUniqueCount
 * @property list<Shapes\InsightRuleContributor> $Contributors
 * @property list<Shapes\InsightRuleMetricDatapoint> $MetricDatapoints
 */
class GetInsightRuleReportResponse extends Response
{
}
