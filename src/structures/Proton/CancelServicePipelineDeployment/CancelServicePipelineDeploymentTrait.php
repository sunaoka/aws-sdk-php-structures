<?php

namespace Sunaoka\Aws\Structures\Proton\CancelServicePipelineDeployment;

trait CancelServicePipelineDeploymentTrait
{
    /**
     * @param CancelServicePipelineDeploymentRequest $args
     * @return CancelServicePipelineDeploymentResponse
     */
    public function cancelServicePipelineDeployment(CancelServicePipelineDeploymentRequest $args)
    {
        $result = parent::cancelServicePipelineDeployment($args->toArray());
        return new CancelServicePipelineDeploymentResponse($result->toArray());
    }
}
