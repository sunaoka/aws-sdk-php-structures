<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\CreateEventIntegration;

trait CreateEventIntegrationTrait
{
    /**
     * @param CreateEventIntegrationRequest $args
     * @return CreateEventIntegrationResponse
     */
    public function createEventIntegration(CreateEventIntegrationRequest $args)
    {
        $result = parent::createEventIntegration($args->toArray());
        return new CreateEventIntegrationResponse($result->toArray());
    }
}
