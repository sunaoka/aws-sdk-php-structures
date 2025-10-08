<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\UpdateEventIntegration;

trait UpdateEventIntegrationTrait
{
    /**
     * @param UpdateEventIntegrationRequest $args
     * @return UpdateEventIntegrationResponse
     */
    public function updateEventIntegration(UpdateEventIntegrationRequest $args)
    {
        $result = parent::updateEventIntegration($args->toArray());
        return new UpdateEventIntegrationResponse($result->toArray());
    }
}
