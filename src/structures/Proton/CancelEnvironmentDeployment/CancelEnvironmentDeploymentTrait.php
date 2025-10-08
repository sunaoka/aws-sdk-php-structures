<?php

namespace Sunaoka\Aws\Structures\Proton\CancelEnvironmentDeployment;

trait CancelEnvironmentDeploymentTrait
{
    /**
     * @param CancelEnvironmentDeploymentRequest $args
     * @return CancelEnvironmentDeploymentResponse
     */
    public function cancelEnvironmentDeployment(CancelEnvironmentDeploymentRequest $args)
    {
        $result = parent::cancelEnvironmentDeployment($args->toArray());
        return new CancelEnvironmentDeploymentResponse($result->toArray());
    }
}
