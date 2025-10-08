<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\ListDataIntegrationAssociations;

trait ListDataIntegrationAssociationsTrait
{
    /**
     * @param ListDataIntegrationAssociationsRequest $args
     * @return ListDataIntegrationAssociationsResponse
     */
    public function listDataIntegrationAssociations(ListDataIntegrationAssociationsRequest $args)
    {
        $result = parent::listDataIntegrationAssociations($args->toArray());
        return new ListDataIntegrationAssociationsResponse($result->toArray());
    }
}
