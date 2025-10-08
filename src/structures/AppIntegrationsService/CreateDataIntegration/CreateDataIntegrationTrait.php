<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\CreateDataIntegration;

trait CreateDataIntegrationTrait
{
    /**
     * @param CreateDataIntegrationRequest $args
     * @return CreateDataIntegrationResponse
     */
    public function createDataIntegration(CreateDataIntegrationRequest $args)
    {
        $result = parent::createDataIntegration($args->toArray());
        return new CreateDataIntegrationResponse($result->toArray());
    }
}
