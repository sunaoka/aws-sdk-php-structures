<?php

namespace Sunaoka\Aws\Structures\CloudFront\DeleteContinuousDeploymentPolicy;

trait DeleteContinuousDeploymentPolicyTrait
{
    /**
     * @param DeleteContinuousDeploymentPolicyRequest $args
     * @return void
     */
    public function deleteContinuousDeploymentPolicy(DeleteContinuousDeploymentPolicyRequest $args)
    {
        parent::deleteContinuousDeploymentPolicy($args->toArray());
    }
}
