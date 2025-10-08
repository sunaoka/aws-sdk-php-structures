<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\ListEventIntegrationAssociations;

trait ListEventIntegrationAssociationsTrait
{
    /**
     * @param ListEventIntegrationAssociationsRequest $args
     * @return ListEventIntegrationAssociationsResponse
     */
    public function listEventIntegrationAssociations(ListEventIntegrationAssociationsRequest $args)
    {
        $result = parent::listEventIntegrationAssociations($args->toArray());
        return new ListEventIntegrationAssociationsResponse($result->toArray());
    }
}
