<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\ListApplicationAssociations;

trait ListApplicationAssociationsTrait
{
    /**
     * @param ListApplicationAssociationsRequest $args
     * @return ListApplicationAssociationsResponse
     */
    public function listApplicationAssociations(ListApplicationAssociationsRequest $args)
    {
        $result = parent::listApplicationAssociations($args->toArray());
        return new ListApplicationAssociationsResponse($result->toArray());
    }
}
