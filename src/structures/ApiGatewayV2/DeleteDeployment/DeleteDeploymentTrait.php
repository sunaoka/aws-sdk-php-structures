<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeleteDeployment;

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
