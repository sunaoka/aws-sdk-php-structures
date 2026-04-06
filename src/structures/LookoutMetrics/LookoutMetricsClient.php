<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics;

class LookoutMetricsClient extends \Aws\LookoutMetrics\LookoutMetricsClient
{
    use ActivateAnomalyDetector\ActivateAnomalyDetectorTrait;
    use BackTestAnomalyDetector\BackTestAnomalyDetectorTrait;
    use CreateAlert\CreateAlertTrait;
    use CreateAnomalyDetector\CreateAnomalyDetectorTrait;
    use CreateMetricSet\CreateMetricSetTrait;
    use DeactivateAnomalyDetector\DeactivateAnomalyDetectorTrait;
    use DeleteAlert\DeleteAlertTrait;
    use DeleteAnomalyDetector\DeleteAnomalyDetectorTrait;
    use DescribeAlert\DescribeAlertTrait;
    use DescribeAnomalyDetectionExecutions\DescribeAnomalyDetectionExecutionsTrait;
    use DescribeAnomalyDetector\DescribeAnomalyDetectorTrait;
    use DescribeMetricSet\DescribeMetricSetTrait;
    use DetectMetricSetConfig\DetectMetricSetConfigTrait;
    use GetAnomalyGroup\GetAnomalyGroupTrait;
    use GetDataQualityMetrics\GetDataQualityMetricsTrait;
    use GetFeedback\GetFeedbackTrait;
    use GetSampleData\GetSampleDataTrait;
    use ListAlerts\ListAlertsTrait;
    use ListAnomalyDetectors\ListAnomalyDetectorsTrait;
    use ListAnomalyGroupRelatedMetrics\ListAnomalyGroupRelatedMetricsTrait;
    use ListAnomalyGroupSummaries\ListAnomalyGroupSummariesTrait;
    use ListAnomalyGroupTimeSeries\ListAnomalyGroupTimeSeriesTrait;
    use ListMetricSets\ListMetricSetsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutFeedback\PutFeedbackTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAlert\UpdateAlertTrait;
    use UpdateAnomalyDetector\UpdateAnomalyDetectorTrait;
    use UpdateMetricSet\UpdateMetricSetTrait;
}
