<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeploymentGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BlueInstanceTerminationOption $terminateBlueInstancesOnDeploymentSuccess
 * @property DeploymentReadyOption $deploymentReadyOption
 * @property GreenFleetProvisioningOption $greenFleetProvisioningOption
 */
class BlueGreenDeploymentConfiguration extends Shape
{
    /**
     * @param array{
     *     terminateBlueInstancesOnDeploymentSuccess?: BlueInstanceTerminationOption,
     *     deploymentReadyOption?: DeploymentReadyOption,
     *     greenFleetProvisioningOption?: GreenFleetProvisioningOption
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
