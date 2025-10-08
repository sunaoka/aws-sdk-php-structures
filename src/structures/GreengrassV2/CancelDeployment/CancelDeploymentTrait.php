<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CancelDeployment;

trait CancelDeploymentTrait
{
    /**
     * @param CancelDeploymentRequest $args
     * @return CancelDeploymentResponse
     */
    public function cancelDeployment(CancelDeploymentRequest $args)
    {
        $result = parent::cancelDeployment($args->toArray());
        return new CancelDeploymentResponse($result->toArray());
    }
}
