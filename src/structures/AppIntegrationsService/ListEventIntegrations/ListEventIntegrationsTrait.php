<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\ListEventIntegrations;

trait ListEventIntegrationsTrait
{
    /**
     * @param ListEventIntegrationsRequest $args
     * @return ListEventIntegrationsResponse
     */
    public function listEventIntegrations(ListEventIntegrationsRequest $args)
    {
        $result = parent::listEventIntegrations($args->toArray());
        return new ListEventIntegrationsResponse($result->toArray());
    }
}
