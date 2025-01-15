<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeploymentTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'InstanceTarget'|'LambdaTarget'|'ECSTarget'|'CloudFormationTarget'|null $deploymentTargetType
 * @property InstanceTarget|null $instanceTarget
 * @property LambdaTarget|null $lambdaTarget
 * @property ECSTarget|null $ecsTarget
 * @property CloudFormationTarget|null $cloudFormationTarget
 */
class DeploymentTarget extends Shape
{
    /**
     * @param array{
     *     deploymentTargetType?: 'InstanceTarget'|'LambdaTarget'|'ECSTarget'|'CloudFormationTarget'|null,
     *     instanceTarget?: InstanceTarget|null,
     *     lambdaTarget?: LambdaTarget|null,
     *     ecsTarget?: ECSTarget|null,
     *     cloudFormationTarget?: CloudFormationTarget|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
