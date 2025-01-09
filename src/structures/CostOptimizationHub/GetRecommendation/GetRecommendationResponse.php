<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $recommendationId
 * @property string $resourceId
 * @property string $resourceArn
 * @property string $accountId
 * @property string $currencyCode
 * @property int $recommendationLookbackPeriodInDays
 * @property int $costCalculationLookbackPeriodInDays
 * @property double $estimatedSavingsPercentage
 * @property double $estimatedSavingsOverCostCalculationLookbackPeriod
 * @property 'Ec2Instance'|'LambdaFunction'|'EbsVolume'|'EcsService'|'Ec2AutoScalingGroup'|'Ec2InstanceSavingsPlans'|'ComputeSavingsPlans'|'SageMakerSavingsPlans'|'Ec2ReservedInstances'|'RdsReservedInstances'|'OpenSearchReservedInstances'|'RedshiftReservedInstances'|'ElastiCacheReservedInstances'|'RdsDbInstanceStorage'|'RdsDbInstance' $currentResourceType
 * @property 'Ec2Instance'|'LambdaFunction'|'EbsVolume'|'EcsService'|'Ec2AutoScalingGroup'|'Ec2InstanceSavingsPlans'|'ComputeSavingsPlans'|'SageMakerSavingsPlans'|'Ec2ReservedInstances'|'RdsReservedInstances'|'OpenSearchReservedInstances'|'RedshiftReservedInstances'|'ElastiCacheReservedInstances'|'RdsDbInstanceStorage'|'RdsDbInstance' $recommendedResourceType
 * @property string $region
 * @property 'ComputeOptimizer'|'CostExplorer' $source
 * @property \Aws\Api\DateTimeResult $lastRefreshTimestamp
 * @property double $estimatedMonthlySavings
 * @property double $estimatedMonthlyCost
 * @property 'VeryLow'|'Low'|'Medium'|'High'|'VeryHigh' $implementationEffort
 * @property bool $restartNeeded
 * @property 'Rightsize'|'Stop'|'Upgrade'|'PurchaseSavingsPlans'|'PurchaseReservedInstances'|'MigrateToGraviton'|'Delete' $actionType
 * @property bool $rollbackPossible
 * @property Shapes\ResourceDetails $currentResourceDetails
 * @property Shapes\ResourceDetails $recommendedResourceDetails
 * @property list<Shapes\Tag> $tags
 */
class GetRecommendationResponse extends Response
{
}
