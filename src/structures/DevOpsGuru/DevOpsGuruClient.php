<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru;

class DevOpsGuruClient extends \Aws\DevOpsGuru\DevOpsGuruClient
{
    use AddNotificationChannel\AddNotificationChannelTrait;
    use DeleteInsight\DeleteInsightTrait;
    use DescribeAccountHealth\DescribeAccountHealthTrait;
    use DescribeAccountOverview\DescribeAccountOverviewTrait;
    use DescribeAnomaly\DescribeAnomalyTrait;
    use DescribeEventSourcesConfig\DescribeEventSourcesConfigTrait;
    use DescribeFeedback\DescribeFeedbackTrait;
    use DescribeInsight\DescribeInsightTrait;
    use DescribeOrganizationHealth\DescribeOrganizationHealthTrait;
    use DescribeOrganizationOverview\DescribeOrganizationOverviewTrait;
    use DescribeOrganizationResourceCollectionHealth\DescribeOrganizationResourceCollectionHealthTrait;
    use DescribeResourceCollectionHealth\DescribeResourceCollectionHealthTrait;
    use DescribeServiceIntegration\DescribeServiceIntegrationTrait;
    use GetCostEstimation\GetCostEstimationTrait;
    use GetResourceCollection\GetResourceCollectionTrait;
    use ListAnomaliesForInsight\ListAnomaliesForInsightTrait;
    use ListAnomalousLogGroups\ListAnomalousLogGroupsTrait;
    use ListEvents\ListEventsTrait;
    use ListInsights\ListInsightsTrait;
    use ListMonitoredResources\ListMonitoredResourcesTrait;
    use ListNotificationChannels\ListNotificationChannelsTrait;
    use ListOrganizationInsights\ListOrganizationInsightsTrait;
    use ListRecommendations\ListRecommendationsTrait;
    use PutFeedback\PutFeedbackTrait;
    use RemoveNotificationChannel\RemoveNotificationChannelTrait;
    use SearchInsights\SearchInsightsTrait;
    use SearchOrganizationInsights\SearchOrganizationInsightsTrait;
    use StartCostEstimation\StartCostEstimationTrait;
    use UpdateEventSourcesConfig\UpdateEventSourcesConfigTrait;
    use UpdateResourceCollection\UpdateResourceCollectionTrait;
    use UpdateServiceIntegration\UpdateServiceIntegrationTrait;
}
