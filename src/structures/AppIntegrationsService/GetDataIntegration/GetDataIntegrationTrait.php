<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\GetDataIntegration;

trait GetDataIntegrationTrait
{
    /**
     * @param GetDataIntegrationRequest $args
     * @return GetDataIntegrationResponse
     */
    public function getDataIntegration(GetDataIntegrationRequest $args)
    {
        $result = parent::getDataIntegration($args->toArray());
        return new GetDataIntegrationResponse($result->toArray());
    }
}
