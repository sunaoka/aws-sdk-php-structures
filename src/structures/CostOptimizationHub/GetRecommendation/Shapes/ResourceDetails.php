<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LambdaFunction|null $lambdaFunction
 * @property EcsService|null $ecsService
 * @property Ec2Instance|null $ec2Instance
 * @property EbsVolume|null $ebsVolume
 * @property Ec2AutoScalingGroup|null $ec2AutoScalingGroup
 * @property Ec2ReservedInstances|null $ec2ReservedInstances
 * @property RdsReservedInstances|null $rdsReservedInstances
 * @property ElastiCacheReservedInstances|null $elastiCacheReservedInstances
 * @property OpenSearchReservedInstances|null $openSearchReservedInstances
 * @property RedshiftReservedInstances|null $redshiftReservedInstances
 * @property Ec2InstanceSavingsPlans|null $ec2InstanceSavingsPlans
 * @property ComputeSavingsPlans|null $computeSavingsPlans
 * @property SageMakerSavingsPlans|null $sageMakerSavingsPlans
 * @property RdsDbInstance|null $rdsDbInstance
 * @property RdsDbInstanceStorage|null $rdsDbInstanceStorage
 * @property AuroraDbClusterStorage|null $auroraDbClusterStorage
 * @property DynamoDbReservedCapacity|null $dynamoDbReservedCapacity
 * @property MemoryDbReservedInstances|null $memoryDbReservedInstances
 * @property NatGateway|null $natGateway
 */
class ResourceDetails extends Shape
{
    /**
     * @param array{
     *     lambdaFunction?: LambdaFunction|null,
     *     ecsService?: EcsService|null,
     *     ec2Instance?: Ec2Instance|null,
     *     ebsVolume?: EbsVolume|null,
     *     ec2AutoScalingGroup?: Ec2AutoScalingGroup|null,
     *     ec2ReservedInstances?: Ec2ReservedInstances|null,
     *     rdsReservedInstances?: RdsReservedInstances|null,
     *     elastiCacheReservedInstances?: ElastiCacheReservedInstances|null,
     *     openSearchReservedInstances?: OpenSearchReservedInstances|null,
     *     redshiftReservedInstances?: RedshiftReservedInstances|null,
     *     ec2InstanceSavingsPlans?: Ec2InstanceSavingsPlans|null,
     *     computeSavingsPlans?: ComputeSavingsPlans|null,
     *     sageMakerSavingsPlans?: SageMakerSavingsPlans|null,
     *     rdsDbInstance?: RdsDbInstance|null,
     *     rdsDbInstanceStorage?: RdsDbInstanceStorage|null,
     *     auroraDbClusterStorage?: AuroraDbClusterStorage|null,
     *     dynamoDbReservedCapacity?: DynamoDbReservedCapacity|null,
     *     memoryDbReservedInstances?: MemoryDbReservedInstances|null,
     *     natGateway?: NatGateway|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
