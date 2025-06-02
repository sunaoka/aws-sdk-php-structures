<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $recommendationId
 * @property string|null $resourceId
 * @property string|null $resourceArn
 * @property string|null $accountId
 * @property string|null $currencyCode
 * @property int|null $recommendationLookbackPeriodInDays
 * @property int|null $costCalculationLookbackPeriodInDays
 * @property double|null $estimatedSavingsPercentage
 * @property double|null $estimatedSavingsOverCostCalculationLookbackPeriod
 * @property 'Ec2Instance'|'LambdaFunction'|'EbsVolume'|'EcsService'|'Ec2AutoScalingGroup'|'Ec2InstanceSavingsPlans'|'ComputeSavingsPlans'|'SageMakerSavingsPlans'|'Ec2ReservedInstances'|'RdsReservedInstances'|'OpenSearchReservedInstances'|'RedshiftReservedInstances'|'ElastiCacheReservedInstances'|'RdsDbInstanceStorage'|'RdsDbInstance'|'AuroraDbClusterStorage'|'DynamoDbReservedCapacity'|'MemoryDbReservedInstances'|null $currentResourceType
 * @property 'Ec2Instance'|'LambdaFunction'|'EbsVolume'|'EcsService'|'Ec2AutoScalingGroup'|'Ec2InstanceSavingsPlans'|'ComputeSavingsPlans'|'SageMakerSavingsPlans'|'Ec2ReservedInstances'|'RdsReservedInstances'|'OpenSearchReservedInstances'|'RedshiftReservedInstances'|'ElastiCacheReservedInstances'|'RdsDbInstanceStorage'|'RdsDbInstance'|'AuroraDbClusterStorage'|'DynamoDbReservedCapacity'|'MemoryDbReservedInstances'|null $recommendedResourceType
 * @property string|null $region
 * @property 'ComputeOptimizer'|'CostExplorer'|null $source
 * @property \Aws\Api\DateTimeResult|null $lastRefreshTimestamp
 * @property double|null $estimatedMonthlySavings
 * @property double|null $estimatedMonthlyCost
 * @property 'VeryLow'|'Low'|'Medium'|'High'|'VeryHigh'|null $implementationEffort
 * @property bool|null $restartNeeded
 * @property 'Rightsize'|'Stop'|'Upgrade'|'PurchaseSavingsPlans'|'PurchaseReservedInstances'|'MigrateToGraviton'|'Delete'|'ScaleIn'|null $actionType
 * @property bool|null $rollbackPossible
 * @property Shapes\ResourceDetails|null $currentResourceDetails
 * @property Shapes\ResourceDetails|null $recommendedResourceDetails
 * @property list<Shapes\Tag>|null $tags
 */
class GetRecommendationResponse extends Response
{
}
