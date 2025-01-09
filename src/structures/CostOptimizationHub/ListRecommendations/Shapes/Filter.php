<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\ListRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $restartNeeded
 * @property bool $rollbackPossible
 * @property list<'VeryLow'|'Low'|'Medium'|'High'|'VeryHigh'> $implementationEfforts
 * @property list<string> $accountIds
 * @property list<string> $regions
 * @property list<'Ec2Instance'|'LambdaFunction'|'EbsVolume'|'EcsService'|'Ec2AutoScalingGroup'|'Ec2InstanceSavingsPlans'|'ComputeSavingsPlans'|'SageMakerSavingsPlans'|'Ec2ReservedInstances'|'RdsReservedInstances'|'OpenSearchReservedInstances'|'RedshiftReservedInstances'|'ElastiCacheReservedInstances'|'RdsDbInstanceStorage'|'RdsDbInstance'> $resourceTypes
 * @property list<'Rightsize'|'Stop'|'Upgrade'|'PurchaseSavingsPlans'|'PurchaseReservedInstances'|'MigrateToGraviton'|'Delete'> $actionTypes
 * @property list<Tag> $tags
 * @property list<string> $resourceIds
 * @property list<string> $resourceArns
 * @property list<string> $recommendationIds
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     restartNeeded?: bool,
     *     rollbackPossible?: bool,
     *     implementationEfforts?: list<'VeryLow'|'Low'|'Medium'|'High'|'VeryHigh'>,
     *     accountIds?: list<string>,
     *     regions?: list<string>,
     *     resourceTypes?: list<'Ec2Instance'|'LambdaFunction'|'EbsVolume'|'EcsService'|'Ec2AutoScalingGroup'|'Ec2InstanceSavingsPlans'|'ComputeSavingsPlans'|'SageMakerSavingsPlans'|'Ec2ReservedInstances'|'RdsReservedInstances'|'OpenSearchReservedInstances'|'RedshiftReservedInstances'|'ElastiCacheReservedInstances'|'RdsDbInstanceStorage'|'RdsDbInstance'>,
     *     actionTypes?: list<'Rightsize'|'Stop'|'Upgrade'|'PurchaseSavingsPlans'|'PurchaseReservedInstances'|'MigrateToGraviton'|'Delete'>,
     *     tags?: list<Tag>,
     *     resourceIds?: list<string>,
     *     resourceArns?: list<string>,
     *     recommendationIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
