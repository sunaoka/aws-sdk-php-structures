<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\GetEventIntegration;

trait GetEventIntegrationTrait
{
    /**
     * @param GetEventIntegrationRequest $args
     * @return GetEventIntegrationResponse
     */
    public function getEventIntegration(GetEventIntegrationRequest $args)
    {
        $result = parent::getEventIntegration($args->toArray());
        return new GetEventIntegrationResponse($result->toArray());
    }
}
