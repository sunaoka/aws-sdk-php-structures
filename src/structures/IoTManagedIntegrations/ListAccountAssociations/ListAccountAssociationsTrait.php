<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListAccountAssociations;

trait ListAccountAssociationsTrait
{
    /**
     * @param ListAccountAssociationsRequest $args
     * @return ListAccountAssociationsResponse
     */
    public function listAccountAssociations(ListAccountAssociationsRequest $args)
    {
        $result = parent::listAccountAssociations($args->toArray());
        return new ListAccountAssociationsResponse($result->toArray());
    }
}
