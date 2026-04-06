<?php

namespace Sunaoka\Aws\Structures\MarketplaceDeployment\PutDeploymentParameter;

trait PutDeploymentParameterTrait
{
    /**
     * @param PutDeploymentParameterRequest $args
     * @return PutDeploymentParameterResponse
     */
    public function putDeploymentParameter(PutDeploymentParameterRequest $args)
    {
        $result = parent::putDeploymentParameter($args->toArray());
        return new PutDeploymentParameterResponse($result->toArray());
    }
}
