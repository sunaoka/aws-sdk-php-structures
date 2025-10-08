<?php

namespace Sunaoka\Aws\Structures\Proton\CancelServiceInstanceDeployment;

trait CancelServiceInstanceDeploymentTrait
{
    /**
     * @param CancelServiceInstanceDeploymentRequest $args
     * @return CancelServiceInstanceDeploymentResponse
     */
    public function cancelServiceInstanceDeployment(CancelServiceInstanceDeploymentRequest $args)
    {
        $result = parent::cancelServiceInstanceDeployment($args->toArray());
        return new CancelServiceInstanceDeploymentResponse($result->toArray());
    }
}
