<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\ListDataIntegrations;

trait ListDataIntegrationsTrait
{
    /**
     * @param ListDataIntegrationsRequest $args
     * @return ListDataIntegrationsResponse
     */
    public function listDataIntegrations(ListDataIntegrationsRequest $args)
    {
        $result = parent::listDataIntegrations($args->toArray());
        return new ListDataIntegrationsResponse($result->toArray());
    }
}
