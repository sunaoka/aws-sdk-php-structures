<?php

namespace Sunaoka\Aws\Structures\CloudWatch;

class CloudWatchClient extends \Aws\CloudWatch\CloudWatchClient
{
    use DeleteAlarms\DeleteAlarmsTrait;
    use DeleteAnomalyDetector\DeleteAnomalyDetectorTrait;
    use DeleteDashboards\DeleteDashboardsTrait;
    use DeleteInsightRules\DeleteInsightRulesTrait;
    use DeleteMetricStream\DeleteMetricStreamTrait;
    use DescribeAlarmContributors\DescribeAlarmContributorsTrait;
    use DescribeAlarmHistory\DescribeAlarmHistoryTrait;
    use DescribeAlarms\DescribeAlarmsTrait;
    use DescribeAlarmsForMetric\DescribeAlarmsForMetricTrait;
    use DescribeAnomalyDetectors\DescribeAnomalyDetectorsTrait;
    use DescribeInsightRules\DescribeInsightRulesTrait;
    use DisableAlarmActions\DisableAlarmActionsTrait;
    use DisableInsightRules\DisableInsightRulesTrait;
    use EnableAlarmActions\EnableAlarmActionsTrait;
    use EnableInsightRules\EnableInsightRulesTrait;
    use GetDashboard\GetDashboardTrait;
    use GetInsightRuleReport\GetInsightRuleReportTrait;
    use GetMetricData\GetMetricDataTrait;
    use GetMetricStatistics\GetMetricStatisticsTrait;
    use GetMetricStream\GetMetricStreamTrait;
    use GetMetricWidgetImage\GetMetricWidgetImageTrait;
    use ListDashboards\ListDashboardsTrait;
    use ListManagedInsightRules\ListManagedInsightRulesTrait;
    use ListMetricStreams\ListMetricStreamsTrait;
    use ListMetrics\ListMetricsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutAnomalyDetector\PutAnomalyDetectorTrait;
    use PutCompositeAlarm\PutCompositeAlarmTrait;
    use PutDashboard\PutDashboardTrait;
    use PutInsightRule\PutInsightRuleTrait;
    use PutManagedInsightRules\PutManagedInsightRulesTrait;
    use PutMetricAlarm\PutMetricAlarmTrait;
    use PutMetricData\PutMetricDataTrait;
    use PutMetricStream\PutMetricStreamTrait;
    use SetAlarmState\SetAlarmStateTrait;
    use StartMetricStreams\StartMetricStreamsTrait;
    use StopMetricStreams\StopMetricStreamsTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
