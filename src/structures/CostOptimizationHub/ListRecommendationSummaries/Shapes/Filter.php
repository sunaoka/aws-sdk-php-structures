<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\ListRecommendationSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $restartNeeded
 * @property bool|null $rollbackPossible
 * @property list<'VeryLow'|'Low'|'Medium'|'High'|'VeryHigh'>|null $implementationEfforts
 * @property list<string>|null $accountIds
 * @property list<string>|null $regions
 * @property list<'Ec2Instance'|'LambdaFunction'|'EbsVolume'|'EcsService'|'Ec2AutoScalingGroup'|'Ec2InstanceSavingsPlans'|'ComputeSavingsPlans'|'SageMakerSavingsPlans'|'Ec2ReservedInstances'|'RdsReservedInstances'|'OpenSearchReservedInstances'|'RedshiftReservedInstances'|'ElastiCacheReservedInstances'|'RdsDbInstanceStorage'|'RdsDbInstance'>|null $resourceTypes
 * @property list<'Rightsize'|'Stop'|'Upgrade'|'PurchaseSavingsPlans'|'PurchaseReservedInstances'|'MigrateToGraviton'|'Delete'|'ScaleIn'>|null $actionTypes
 * @property list<Tag>|null $tags
 * @property list<string>|null $resourceIds
 * @property list<string>|null $resourceArns
 * @property list<string>|null $recommendationIds
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     restartNeeded?: bool|null,
     *     rollbackPossible?: bool|null,
     *     implementationEfforts?: list<'VeryLow'|'Low'|'Medium'|'High'|'VeryHigh'>|null,
     *     accountIds?: list<string>|null,
     *     regions?: list<string>|null,
     *     resourceTypes?: list<'Ec2Instance'|'LambdaFunction'|'EbsVolume'|'EcsService'|'Ec2AutoScalingGroup'|'Ec2InstanceSavingsPlans'|'ComputeSavingsPlans'|'SageMakerSavingsPlans'|'Ec2ReservedInstances'|'RdsReservedInstances'|'OpenSearchReservedInstances'|'RedshiftReservedInstances'|'ElastiCacheReservedInstances'|'RdsDbInstanceStorage'|'RdsDbInstance'>|null,
     *     actionTypes?: list<'Rightsize'|'Stop'|'Upgrade'|'PurchaseSavingsPlans'|'PurchaseReservedInstances'|'MigrateToGraviton'|'Delete'|'ScaleIn'>|null,
     *     tags?: list<Tag>|null,
     *     resourceIds?: list<string>|null,
     *     resourceArns?: list<string>|null,
     *     recommendationIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
