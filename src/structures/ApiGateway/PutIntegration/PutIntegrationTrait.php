<?php

namespace Sunaoka\Aws\Structures\ApiGateway\PutIntegration;

trait PutIntegrationTrait
{
    /**
     * @param PutIntegrationRequest $args
     * @return PutIntegrationResponse
     */
    public function putIntegration(PutIntegrationRequest $args)
    {
        $result = parent::putIntegration($args->toArray());
        return new PutIntegrationResponse($result->toArray());
    }
}
