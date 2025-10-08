<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateIntegration;

trait UpdateIntegrationTrait
{
    /**
     * @param UpdateIntegrationRequest $args
     * @return UpdateIntegrationResponse
     */
    public function updateIntegration(UpdateIntegrationRequest $args)
    {
        $result = parent::updateIntegration($args->toArray());
        return new UpdateIntegrationResponse($result->toArray());
    }
}
