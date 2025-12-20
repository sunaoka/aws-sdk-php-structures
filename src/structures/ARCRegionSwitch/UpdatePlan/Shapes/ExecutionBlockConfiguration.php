<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\UpdatePlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomActionLambdaConfiguration|null $customActionLambdaConfig
 * @property Ec2AsgCapacityIncreaseConfiguration|null $ec2AsgCapacityIncreaseConfig
 * @property ExecutionApprovalConfiguration|null $executionApprovalConfig
 * @property ArcRoutingControlConfiguration|null $arcRoutingControlConfig
 * @property GlobalAuroraConfiguration|null $globalAuroraConfig
 * @property ParallelExecutionBlockConfiguration|null $parallelConfig
 * @property RegionSwitchPlanConfiguration|null $regionSwitchPlanConfig
 * @property EcsCapacityIncreaseConfiguration|null $ecsCapacityIncreaseConfig
 * @property EksResourceScalingConfiguration|null $eksResourceScalingConfig
 * @property Route53HealthCheckConfiguration|null $route53HealthCheckConfig
 * @property DocumentDbConfiguration|null $documentDbConfig
 */
class ExecutionBlockConfiguration extends Shape
{
    /**
     * @param array{
     *     customActionLambdaConfig?: CustomActionLambdaConfiguration|null,
     *     ec2AsgCapacityIncreaseConfig?: Ec2AsgCapacityIncreaseConfiguration|null,
     *     executionApprovalConfig?: ExecutionApprovalConfiguration|null,
     *     arcRoutingControlConfig?: ArcRoutingControlConfiguration|null,
     *     globalAuroraConfig?: GlobalAuroraConfiguration|null,
     *     parallelConfig?: ParallelExecutionBlockConfiguration|null,
     *     regionSwitchPlanConfig?: RegionSwitchPlanConfiguration|null,
     *     ecsCapacityIncreaseConfig?: EcsCapacityIncreaseConfiguration|null,
     *     eksResourceScalingConfig?: EksResourceScalingConfiguration|null,
     *     route53HealthCheckConfig?: Route53HealthCheckConfiguration|null,
     *     documentDbConfig?: DocumentDbConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
