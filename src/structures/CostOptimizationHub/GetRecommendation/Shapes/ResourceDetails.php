<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LambdaFunction $lambdaFunction
 * @property EcsService $ecsService
 * @property Ec2Instance $ec2Instance
 * @property EbsVolume $ebsVolume
 * @property Ec2AutoScalingGroup $ec2AutoScalingGroup
 * @property Ec2ReservedInstances $ec2ReservedInstances
 * @property RdsReservedInstances $rdsReservedInstances
 * @property ElastiCacheReservedInstances $elastiCacheReservedInstances
 * @property OpenSearchReservedInstances $openSearchReservedInstances
 * @property RedshiftReservedInstances $redshiftReservedInstances
 * @property Ec2InstanceSavingsPlans $ec2InstanceSavingsPlans
 * @property ComputeSavingsPlans $computeSavingsPlans
 * @property SageMakerSavingsPlans $sageMakerSavingsPlans
 * @property RdsDbInstance $rdsDbInstance
 * @property RdsDbInstanceStorage $rdsDbInstanceStorage
 */
class ResourceDetails extends Shape
{
    /**
     * @param array{
     *     lambdaFunction?: LambdaFunction,
     *     ecsService?: EcsService,
     *     ec2Instance?: Ec2Instance,
     *     ebsVolume?: EbsVolume,
     *     ec2AutoScalingGroup?: Ec2AutoScalingGroup,
     *     ec2ReservedInstances?: Ec2ReservedInstances,
     *     rdsReservedInstances?: RdsReservedInstances,
     *     elastiCacheReservedInstances?: ElastiCacheReservedInstances,
     *     openSearchReservedInstances?: OpenSearchReservedInstances,
     *     redshiftReservedInstances?: RedshiftReservedInstances,
     *     ec2InstanceSavingsPlans?: Ec2InstanceSavingsPlans,
     *     computeSavingsPlans?: ComputeSavingsPlans,
     *     sageMakerSavingsPlans?: SageMakerSavingsPlans,
     *     rdsDbInstance?: RdsDbInstance,
     *     rdsDbInstanceStorage?: RdsDbInstanceStorage
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
