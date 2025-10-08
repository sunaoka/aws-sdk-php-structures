<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\DeleteEventIntegration;

trait DeleteEventIntegrationTrait
{
    /**
     * @param DeleteEventIntegrationRequest $args
     * @return DeleteEventIntegrationResponse
     */
    public function deleteEventIntegration(DeleteEventIntegrationRequest $args)
    {
        $result = parent::deleteEventIntegration($args->toArray());
        return new DeleteEventIntegrationResponse($result->toArray());
    }
}
