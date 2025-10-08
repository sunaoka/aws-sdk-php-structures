<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteDeployment;

trait DeleteDeploymentTrait
{
    /**
     * @param DeleteDeploymentRequest $args
     * @return void
     */
    public function deleteDeployment(DeleteDeploymentRequest $args)
    {
        parent::deleteDeployment($args->toArray());
    }
}
