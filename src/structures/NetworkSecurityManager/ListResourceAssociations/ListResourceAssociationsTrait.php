<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListResourceAssociations;

trait ListResourceAssociationsTrait
{
    /**
     * @param ListResourceAssociationsRequest $args
     * @return ListResourceAssociationsResponse
     */
    public function listResourceAssociations(ListResourceAssociationsRequest $args)
    {
        $result = parent::listResourceAssociations($args->toArray());
        return new ListResourceAssociationsResponse($result->toArray());
    }
}
