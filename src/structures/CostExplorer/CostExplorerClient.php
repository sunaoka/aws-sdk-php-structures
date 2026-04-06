<?php

namespace Sunaoka\Aws\Structures\CostExplorer;

class CostExplorerClient extends \Aws\CostExplorer\CostExplorerClient
{
    use CreateAnomalyMonitor\CreateAnomalyMonitorTrait;
    use CreateAnomalySubscription\CreateAnomalySubscriptionTrait;
    use CreateCostCategoryDefinition\CreateCostCategoryDefinitionTrait;
    use DeleteAnomalyMonitor\DeleteAnomalyMonitorTrait;
    use DeleteAnomalySubscription\DeleteAnomalySubscriptionTrait;
    use DeleteCostCategoryDefinition\DeleteCostCategoryDefinitionTrait;
    use DescribeCostCategoryDefinition\DescribeCostCategoryDefinitionTrait;
    use GetAnomalies\GetAnomaliesTrait;
    use GetAnomalyMonitors\GetAnomalyMonitorsTrait;
    use GetAnomalySubscriptions\GetAnomalySubscriptionsTrait;
    use GetCostAndUsage\GetCostAndUsageTrait;
    use GetCostAndUsageWithResources\GetCostAndUsageWithResourcesTrait;
    use GetCostCategories\GetCostCategoriesTrait;
    use GetCostForecast\GetCostForecastTrait;
    use GetDimensionValues\GetDimensionValuesTrait;
    use GetReservationCoverage\GetReservationCoverageTrait;
    use GetReservationPurchaseRecommendation\GetReservationPurchaseRecommendationTrait;
    use GetReservationUtilization\GetReservationUtilizationTrait;
    use GetRightsizingRecommendation\GetRightsizingRecommendationTrait;
    use GetSavingsPlanPurchaseRecommendationDetails\GetSavingsPlanPurchaseRecommendationDetailsTrait;
    use GetSavingsPlansCoverage\GetSavingsPlansCoverageTrait;
    use GetSavingsPlansPurchaseRecommendation\GetSavingsPlansPurchaseRecommendationTrait;
    use GetSavingsPlansUtilization\GetSavingsPlansUtilizationTrait;
    use GetSavingsPlansUtilizationDetails\GetSavingsPlansUtilizationDetailsTrait;
    use GetTags\GetTagsTrait;
    use GetUsageForecast\GetUsageForecastTrait;
    use ListCostAllocationTags\ListCostAllocationTagsTrait;
    use ListCostCategoryDefinitions\ListCostCategoryDefinitionsTrait;
    use ListSavingsPlansPurchaseRecommendationGeneration\ListSavingsPlansPurchaseRecommendationGenerationTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ProvideAnomalyFeedback\ProvideAnomalyFeedbackTrait;
    use StartSavingsPlansPurchaseRecommendationGeneration\StartSavingsPlansPurchaseRecommendationGenerationTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAnomalyMonitor\UpdateAnomalyMonitorTrait;
    use UpdateAnomalySubscription\UpdateAnomalySubscriptionTrait;
    use UpdateCostAllocationTagsStatus\UpdateCostAllocationTagsStatusTrait;
    use UpdateCostCategoryDefinition\UpdateCostCategoryDefinitionTrait;
}
