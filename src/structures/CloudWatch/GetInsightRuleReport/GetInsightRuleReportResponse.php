<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetInsightRuleReport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string>|null $KeyLabels
 * @property string|null $AggregationStatistic
 * @property double|null $AggregateValue
 * @property int|null $ApproximateUniqueCount
 * @property list<Shapes\InsightRuleContributor>|null $Contributors
 * @property list<Shapes\InsightRuleMetricDatapoint>|null $MetricDatapoints
 */
class GetInsightRuleReportResponse extends Response
{
}
