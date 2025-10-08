<?php

namespace Sunaoka\Aws\Structures\Connect\ListIntegrationAssociations;

trait ListIntegrationAssociationsTrait
{
    /**
     * @param ListIntegrationAssociationsRequest $args
     * @return ListIntegrationAssociationsResponse
     */
    public function listIntegrationAssociations(ListIntegrationAssociationsRequest $args)
    {
        $result = parent::listIntegrationAssociations($args->toArray());
        return new ListIntegrationAssociationsResponse($result->toArray());
    }
}
