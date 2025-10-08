<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetIntegrationResponse;

trait GetIntegrationResponseTrait
{
    /**
     * @param GetIntegrationResponseRequest $args
     * @return GetIntegrationResponseResponse
     */
    public function getIntegrationResponse(GetIntegrationResponseRequest $args)
    {
        $result = parent::getIntegrationResponse($args->toArray());
        return new GetIntegrationResponseResponse($result->toArray());
    }
}
