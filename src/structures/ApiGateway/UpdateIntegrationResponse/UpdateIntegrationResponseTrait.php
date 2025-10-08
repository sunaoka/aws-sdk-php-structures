<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateIntegrationResponse;

trait UpdateIntegrationResponseTrait
{
    /**
     * @param UpdateIntegrationResponseRequest $args
     * @return UpdateIntegrationResponseResponse
     */
    public function updateIntegrationResponse(UpdateIntegrationResponseRequest $args)
    {
        $result = parent::updateIntegrationResponse($args->toArray());
        return new UpdateIntegrationResponseResponse($result->toArray());
    }
}
