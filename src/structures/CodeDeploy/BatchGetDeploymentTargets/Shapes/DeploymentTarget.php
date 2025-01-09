<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeploymentTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'InstanceTarget'|'LambdaTarget'|'ECSTarget'|'CloudFormationTarget' $deploymentTargetType
 * @property InstanceTarget $instanceTarget
 * @property LambdaTarget $lambdaTarget
 * @property ECSTarget $ecsTarget
 * @property CloudFormationTarget $cloudFormationTarget
 */
class DeploymentTarget extends Shape
{
    /**
     * @param array{
     *     deploymentTargetType?: 'InstanceTarget'|'LambdaTarget'|'ECSTarget'|'CloudFormationTarget',
     *     instanceTarget?: InstanceTarget,
     *     lambdaTarget?: LambdaTarget,
     *     ecsTarget?: ECSTarget,
     *     cloudFormationTarget?: CloudFormationTarget
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
