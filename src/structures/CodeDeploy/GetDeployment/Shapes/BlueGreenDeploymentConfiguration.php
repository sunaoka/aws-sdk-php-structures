<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BlueInstanceTerminationOption|null $terminateBlueInstancesOnDeploymentSuccess
 * @property DeploymentReadyOption|null $deploymentReadyOption
 * @property GreenFleetProvisioningOption|null $greenFleetProvisioningOption
 */
class BlueGreenDeploymentConfiguration extends Shape
{
    /**
     * @param array{
     *     terminateBlueInstancesOnDeploymentSuccess?: BlueInstanceTerminationOption|null,
     *     deploymentReadyOption?: DeploymentReadyOption|null,
     *     greenFleetProvisioningOption?: GreenFleetProvisioningOption|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
