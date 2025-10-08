<?php

namespace Sunaoka\Aws\Structures\Proton\CancelComponentDeployment;

trait CancelComponentDeploymentTrait
{
    /**
     * @param CancelComponentDeploymentRequest $args
     * @return CancelComponentDeploymentResponse
     */
    public function cancelComponentDeployment(CancelComponentDeploymentRequest $args)
    {
        $result = parent::cancelComponentDeployment($args->toArray());
        return new CancelComponentDeploymentResponse($result->toArray());
    }
}
