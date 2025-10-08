<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\UpdateDataIntegration;

trait UpdateDataIntegrationTrait
{
    /**
     * @param UpdateDataIntegrationRequest $args
     * @return UpdateDataIntegrationResponse
     */
    public function updateDataIntegration(UpdateDataIntegrationRequest $args)
    {
        $result = parent::updateDataIntegration($args->toArray());
        return new UpdateDataIntegrationResponse($result->toArray());
    }
}
