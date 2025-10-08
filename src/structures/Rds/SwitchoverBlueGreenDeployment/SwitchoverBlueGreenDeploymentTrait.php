<?php

namespace Sunaoka\Aws\Structures\Rds\SwitchoverBlueGreenDeployment;

trait SwitchoverBlueGreenDeploymentTrait
{
    /**
     * @param SwitchoverBlueGreenDeploymentRequest $args
     * @return SwitchoverBlueGreenDeploymentResponse
     */
    public function switchoverBlueGreenDeployment(SwitchoverBlueGreenDeploymentRequest $args)
    {
        $result = parent::switchoverBlueGreenDeployment($args->toArray());
        return new SwitchoverBlueGreenDeploymentResponse($result->toArray());
    }
}
