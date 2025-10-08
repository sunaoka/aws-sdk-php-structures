<?php

namespace Sunaoka\Aws\Structures\ApiGateway\PutIntegrationResponse;

trait PutIntegrationResponseTrait
{
    /**
     * @param PutIntegrationResponseRequest $args
     * @return PutIntegrationResponseResponse
     */
    public function putIntegrationResponse(PutIntegrationResponseRequest $args)
    {
        $result = parent::putIntegrationResponse($args->toArray());
        return new PutIntegrationResponseResponse($result->toArray());
    }
}
